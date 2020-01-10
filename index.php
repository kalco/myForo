<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: index.php                           #
##############################################

ini_set('display_errors', '1');
error_reporting(E_ERROR);

define('HOME', dirname(__FILE__));
define('APP', 'app/controllers/');
define('CORE', 'app/core/');
define('LIB', 'app/lib/');

require_once CORE . 'core.php'; // Core 
define('TIMESTART', Functions::times_page()); // Generate Time
require_once CORE . 'route.php'; // Site Route

if (Cms::setup('compress') == 1) {
    Recipe::compressPage();
}
if (Cms::setup('compress') == 2) {
    Recipe::compressPageMax();
}

Cms::AutoClear();
