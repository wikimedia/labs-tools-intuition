<?php

class TestIntuition extends Intuition {

	// Stub this method. The test asserts that working with these
	// type of fallbacks works, we don't want the tests to rely
	// on the actual fallback data.
	protected function loadFallbacks() {
		$this->langFallbacks = array(
			'de_formal' => array(
				'de',
			),
			'cdo' => array(
				'nan',
				'zh-hant',
			),
			'gan' => array(
				'gan-hant',
				'zh-hant',
				'zh-hans',
			),
		);
	}
}
