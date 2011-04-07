<?php
/**
 *
 * Created on March 24, 2011
 *
 * Copyright 2011 Krinkle <krinklemail@gmail.com>
 *
 * This file is licensed under
 * the Creative Commons Attribution 3.0 Unported License
 * <http://creativecommons.org/licenses/by/3.0/>
 *
 * @package TsIntuition
 */

/**
 * This file outputs the interface to set settings for TsIntuition.
 */


/**
 * Configuration
 * -------------------------------------------------
 */
require_once( '/home/krinkle/common/InitTool.php' ); // BaseTool
require_once( '/home/project/i/n/t/intuition/ToolserverI18N/ToolStart.php' ); // TsIntuition

/* Initialize TsIntuition */
$opts = array(
	'domain' => 'TsIntuition',
	//'suppressnotices' => false, // DEBUG
);

$I18N = new TsIntuition( $opts );

// Load all domains so can get some statistics later on and
// make sure "getAvailableLangs" is compelte
foreach ( $I18N->getAllRegisteredDomains() as $domainKey => $domainInfo ) {
	$I18N->loadTextdomain( $domainKey );
}

/* Initialize BaseTool */
$opts = array(
	'displayTitle'	=> _( 'fullname' ),
	'krinklePrefix'	=> false,
	'remoteBasePath'=> $I18N->dashboardHome,
	'localBasePath'	=> $I18N->localBaseDir,
	'revisionId'	=> $I18N->version,
	'revisionDate'	=> $I18N->dateFormatted( $I18N->versionDate ),
	'styles'		=> array( 'main.css' ),
	'mode'			=> 'dashboard',
);

$Tool = BaseTool::newFromArray( $opts );

/* Load Scripts & Styles */

// jQuery UI
$jqueryui = $kgConf->getJQueryUI();
$Tool->addScripts( $jqueryui['scripts'] );
$Tool->addStyles( $jqueryui['styles'] );

/* Add initial stuff to <head> and <body> */
$Tool->doHtmlHead();
$Tool->doStartBodyWrapper();


/**
 * Tool settings
 * -------------------------------------------------
 */
$toolSettings = array(
	'tabs' => array(),
);


/**
 * Post actions
 * -------------------------------------------------
 */
if ( isset( $_POST['action'] ) ) {

	switch ( $_POST['action'] ) {
		case 'prefset':
			// Set a 30-day, then redirect to index
			$I18N->setCookie( 'userlang', $_POST['fpLang'] );
			$I18N->redirectTo( $Tool->remoteBasePath, 302 );
			break;
	}
}


/**
 * Get actions
 * -------------------------------------------------
 */
if ( isset( $_GET['action'] ) ) {

	switch ( $_GET['action'] ) {
		case 'clearcookies':
			$I18N->wipeCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 2 ) ), 302 );
			break;
		case 'renewcookies':
			$I18N->renewCookies();
			$I18N->redirectTo( $Tool->generatePermalink( array( 'msg' => 3 ) ), 302 );
			break;
	}
}

/**
 * Custom return to
 * -------------------------------------------------
 */
// Tools can pass returnto and returntoquery parameters
// to redirect visitors back to them after setting, changing
// or doing something (eg. clearcookies, renewcookies or prefset)
if ( $I18N->isRedirecting() ) {
	$returnTo = $kgReq->getVal( 'returnto' );
	$returnToQuery = $kgReq->getVal( 'returntoquery' );
	if ( TsIntuitionUtil::nonEmptyStr( $returnTo ) ) {
		if ( TsIntuitionUtil::nonEmptyStr( $returnToQuery ) ) {
			$returnToQuery = '?' . urldecode( $returnToQuery );
		} else {
			$returnToQuery = '';
		}
		$I18N->redirectTo( "http://{$_SERVER['SERVER_NAME']}$returnTo$returnToQuery", 302 );
	}
}


$I18N->doRedirect();

/**
 * Main content output
 * -------------------------------------------------
 */
$Tool->addOut( _g( 'welcome' ), 'h2' );

// Messages ?
if ( isset( $_GET['msg'] ) ) {
	switch ( $_GET['msg'] ) {
		case 2:
			$Tool->addOut(
				_( 'clearcookies-success' ),
				'div',
				array( 'class' => 'msg ns' )
			);
			break;
		case 3:
			$Tool->addOut(
				_( 'renewcookies-success', array( 'variables' => array( '30 ' . _g( 'days' ) ) ) ),
				'div',
				array( 'class' => 'msg ns success' )
			);
			break;
	}
}

$Tool->addOut( '<div id="tsint-dashboard">' );

// Cookie has already been set, show "current-settings" box
if ( $I18N->hasCookies() ) {

	$lifetime = $I18N->getCookieLifetime();
	$after = '';
	$renew = ' (' . kfTag( _('renew-cookies'), 'a', array( 'href' => $Tool->generatePermalink(array('action' => 'renewcookies')) ) ) .')';
	// 29+ days
	if ( $lifetime > 29*24*3600 ) {
		$class = 'perfect';
		$time = floor( $lifetime/3600/24/7 ) . '+ ' . _g('weeks');

	// 10+ days
	} elseif ( $lifetime > 10*24*3600 ) {
		$class = 'good';
		$time = floor( $lifetime/3600/24 ) . '+ ' . _g('days');

	// 1+ day
	} elseif ( $lifetime > 24*3600 ) {
		$class = 'bad';
		$time = floor( $lifetime/3600/24 ) . '+ ' . _g('days');
		$after = $renew;

	// Less than a day
	} else {
		$class = 'worst';
		$time = '<' . ceil( $lifetime/3600 ) . ' ' . _g('hours');
		$after = $renew;

	}

	$Tool->addOut(
		'<div id="tab-currentsettings"><form class="cleanform"><fieldset>'
	.	kfTag( _( 'current-settings' ) . _g( 'colon-separator' ) . ' ', 'legend' )
	.	'<div class="inner">'
	.	kfTag( _( 'current-language' ) . _g( 'colon-separator' ) . ' ', 'label' )
	.	kfTag( '', 'input', array( 'value' => $I18N->getLangName(), 'readonly' => 'readonly' ) )
	.	' ('
	.	kfTag( _( 'clear-cookies'), 'a', array( 'href' => $Tool->generatePermalink( array( 'action' => 'clearcookies' ) ) ) )
	.	')<br />'
	.	kfTag( _( 'cookie-expiration' ) . _g( 'colon-separator' ), 'label' ) . kfTag( '', 'input', array( 'value' => $time, 'class' => "cookie-health $class", 'readonly' => 'readonly' ) )
	.	' ('
	.	kfTag( _( 'renew-cookies'), 'a', array( 'href' => $Tool->generatePermalink( array( 'action' => 'renewcookies' ) ) ) )
	.	')<br />'
	.	$after
	.	'</div></fieldset></form></div><!-- #tab-currentsettings -->'
	);
	$toolSettings['tabs']['#tab-currentsettings'] = _('tab-overview');


}

// Settings form
// XXX: Quick way to build the form
$dropdown = '<select name="fpLang">';
$selected = ' selected="selected"';
foreach ( $I18N->getAvailableLangs() as $langCode => $langName ) {
	$attr = $langCode == $I18N->getLang() ? $selected : '';
	$dropdown .= '<option value="' . $langCode . '"' . $attr . '>' . $langName . '</option>';
}
$dropdown .= '</select>';

$form = '<div id="tab-settingsform"><form action="' . $Tool->remoteBasePath . '" method="post" class="cleanform"><fieldset>
	<legend>' . _( 'settings-legend' ) . '</legend><div class="inner">
	
	<label>' . _html( 'choose-language' ) . _g( 'colon-separator' ) . '</label>
	' . $dropdown . '
	<br />
	
	<input type="hidden" name="action" value="prefset" />
	<input type="hidden" name="returnto" value="' . htmlspecialchars( $kgReq->getVal( 'returnto' ) ) . '" />
	<input type="hidden" name="returntoquery" value="' . htmlspecialchars( $kgReq->getVal( 'returntoquery' ) )  . '" />
	<label></label>
	<input type="submit" nof value="' . _html( 'form-submit', 'general' ) . '" />
	<br />

</div></fieldset></form></div>';

$Tool->addOut( $form );
$toolSettings['tabs']['#tab-settingsform'] = _('tab-settings');


// About tab
$about = '<div id="tab-about">';
	
$about .= '<a href="http://translatewiki.net/wiki/Translating:Toolserver">'
	.	'<img src="http://translatewiki.net/w/i.php?title=Special:TranslationStats&'
	.	'graphit=1&width=520&height=400&group=tsint-0-all" width="520" height="400" alt="" class="floatRight" />'
	.	'</a>';
$about .= 'Technical documentation: <a href="https://wiki.toolserver.org/view/Toolserver_Intuition">https://wiki.toolserver.org/view/Toolserver_Intuition</a>'
	. '<div class="tab-paragraph-head">' . _( 'usage' ) . '</div><ul>';
foreach ( $I18N->getAllRegisteredDomains() as $domainKey => $domainFile ) {
	$domainInfo = $I18N->getDomainInfo( $domainKey );
	$title = $I18N->msg( 'title', $domainKey, /* fallback = */ $domainKey );
	if ( isset( $domainInfo['url'] ) ) {
		$about .= '<li><a href="'
			. htmlspecialchars( $domainInfo['url'] )
			. '"><strong>' . htmlspecialchars( $title )
			. '</strong><br />'
			. htmlspecialchars( $domainInfo['path'] )
			. '</a></li>';
	} else {
		// Don't show tools without a url
		//$item = TsIntuitionUtil::tag( $title, 'em' );
		//$about .= "<li>$item</li>";
	}
}
$about .= '</ul><div style="clear:both"></div></div><!-- #tab-about -->';

$Tool->addOut( $about );
$toolSettings['tabs']['#tab-about'] = _('tab-about');
$toolSettings['tabs']['demo/demo1.php'] = _('tab-demo');


$Tool->addOut( '</div><!-- #tsint-dashboard -->' );


/**
 * JavaScript init
 * -------------------------------------------------
 */
$script[] = '$(document).ready(function(){';
$script[] = '$("#tsint-dashboard").prepend(\'<ul>';
foreach ( $toolSettings['tabs'] as $tabID => $tabName ) {
	$script[] = "<li><a href=\"$tabID\">$tabName</a></li>";
}
$script[] = '</ul>\');';
$script[] = '$("#tsint-dashboard").tabs({
	select: function(event, ui) {
		var url = $.data(ui.tab, "load.tabs");
		if( url ) {
			window.open(url);
			return false;
		}
		return true;
	}
});';
$script[] = '});';

$Tool->addOut( '<script>' . implode( '', $script ) . '</script>' );


/**
 * Close up
 * -------------------------------------------------
 */
$Tool->flushMainOutput();
