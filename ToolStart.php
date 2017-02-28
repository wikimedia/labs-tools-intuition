<?php
// Re-ensure autoload.php for backwards-compatibility with older tools on
// Wikimedia Tool Labs that include ToolStart.php directly.
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/defines.php';

use Krinkle\Intuition\Intuition;
use Krinkle\Intuition\Util;

// Kept for backwards-compatibility with older tools not yet using Composer.
// .. rename from TsIntuition to Intuition in v0.1.3.
class_alias( Intuition::class, 'TsIntuition' );
class_alias( Util::class, 'TsIntuitionUtil' );
// .. rename from Intuition to Krinkle\Intuition\Intuition in v1.0.0.
class_alias( Intuition::class, 'Intuition' );
class_alias( Util::class, 'IntuitionUtil' );
