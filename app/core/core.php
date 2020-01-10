<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: core.php                            #
##############################################
ob_start();
//session
session_start();
session_name("MYFORO");
spl_autoload_register(function($class)
  {
    $dirs = array(
        HOME . '/app/core/classes/',
        HOME . '/app/controllers/',
        HOME . '/app/controllers/admin/',
        HOME . '/app/models/',
        HOME . '/app/models/admin/'
    );
    foreach ($dirs as $dir)
      {
        if (is_file($dir . $class . '.php'))
          {
            require_once($dir . $class . '.php');
          }
      }
  });
if (User::auth())
  {
    $lang      = User::$user['lang'];
    $adminskin = Cms::setup('adminskin');
    $message   = User::$user['message'];
    $skin      = User::$user['skin'];
  }
else
  {
    $lang      = Cms::setup('lang');
    $adminskin = Cms::setup('adminskin');
    $message   = Cms::setup('message');
    $skin      = Cms::setup('skin');
  }
SmartySingleton::instance()->setTemplateDir(array(
    'frontend' => HOME . '/style/frontend/' . $skin . '/templates/',
    'backend' => HOME . '/style/backend/' . $adminskin . '/templates/'
));
SmartySingleton::instance()->getTemplateDir = 'frontend';
SmartySingleton::instance()->getTemplateDir = 'backend';
SmartySingleton::instance()->compile_dir    = HOME . '/files/cache/templates_c/';
SmartySingleton::instance()->config_dir     = HOME . '/files/cache/configs/';
SmartySingleton::instance()->cache_dir      = HOME . '/files/cache/';
define('SMARTY_TEMPLATE_LOAD', HOME . '/style/frontend/' . $skin);
define('SMARTY_TEMPLATE_LOAD_ADMIN', HOME . '/style/backend/' . $adminskin);
define('LOAD_LANG', HOME . '/app/languages/' . $lang . '.ini');
SmartySingleton::instance()->assign(array(
    'setup'     => Cms::setting(),
    'realtime'  => Cms::realtime(),
    'message'   => $message,
    'home'      => Cms::setup('home'),
    'panel'     => Cms::setup('adminpanel'),
    'lang'      => Cms::getLang($strings = []),
    'skin'      => $skin,
    'adminskin' => $adminskin,
    'slug'      => Recipe::getUriSegment(),
    'user'      => User::auth(),
    'url'       => Cms::setup('home') . '' . $_SERVER['REQUEST_URI']
));
if (empty($_SESSION['device']))
  {
    if (Recipe::isMobile())
      {
        $_SESSION['device'] = 'wap';
      }
    else
      {
        $_SESSION['device'] = 'web';
      }
  }