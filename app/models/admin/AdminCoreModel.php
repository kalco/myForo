<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminCoreModel.php                  #
##############################################
class AdminCoreModel {

    function index() {
        SmartySingleton::instance()->assign(array(
            'users' => DB::run("SELECT COUNT(*) FROM `users`")->fetchColumn(),
            'ads' => DB::run("SELECT COUNT(*) FROM `ads`")->fetchColumn(),
            'forum' => DB::run("SELECT COUNT(*) FROM `category`")->fetchColumn(),
            'post' => DB::run("SELECT COUNT(*) FROM `post`")->fetchColumn(),
            'tema' => DB::run("SELECT COUNT(*) FROM `tema`")->fetchColumn(),
            'logs' => DB::run("SELECT COUNT(*) FROM `adminlogs`")->fetchColumn(),
            'notice' => DB::run("SELECT COUNT(*) FROM `notice`")->fetchColumn(),
            'php' => phpversion(),
            'mysql' => extension_loaded('mysql'),
            'pdo' => extension_loaded('pdo'),
            'gd' => extension_loaded('gd'),
            'zlib' => extension_loaded('zlib'),
            'iconv' => extension_loaded('iconv'),
            'mbstring' => extension_loaded('mbstring'),
            'xml' => extension_loaded('xml'),
            'XMLWriter' => extension_loaded('XMLWriter')
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/index.tpl');
    }
}
