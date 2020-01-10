<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminSettingModel.php               #
##############################################

class AdminSettingModel extends Base {

    function index() {

        if (isset($_POST['submit'])) {
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['home']) . "' WHERE `name`='home'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['namesite']) . "' WHERE `name`='namesite'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['message']) . "' WHERE `name`='message'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['adminpanel']) . "' WHERE `name`='adminpanel'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['copy']) . "' WHERE `name`='copy'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['adminlogs']) . "' WHERE `name`='adminlogs'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['timezone']) . "' WHERE `name`='timezone'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['skin']) . "' WHERE `name`='skin'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['adminskin']) . "' WHERE `name`='adminskin'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['lang']) . "' WHERE `name`='lang'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['compress']) . "' WHERE `name`='compress'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['emailadmin']) . "' WHERE `name`='emailadmin'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['antiflood']) . "' WHERE `name`='antiflood'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['autoclear_guest']) . "' WHERE `name`='autoclear_guest'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['keywords']) . "' WHERE `name`='keywords'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['description']) . "' WHERE `name`='description'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['highlight']) . "' WHERE `name`='highlight'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['adslimit']) . "' WHERE `name`='adslimit'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['captcha_width']) . "' WHERE `name`='captcha_width'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['captcha_height']) . "' WHERE `name`='captcha_height'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['captcha_font_size']) . "' WHERE `name`='captcha_font_size'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['captcha_let_amount']) . "' WHERE `name`='captcha_let_amount'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Int($_POST['captcha_let_amount_fon']) . "' WHERE `name`='captcha_let_amount_fon'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['registration']) . "' WHERE `name`='registration'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['activation']) . "' WHERE `name`='activation'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['login_edit']) . "' WHERE `name`='login_edit'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['captcha_signup']) . "' WHERE `name`='captcha_signup'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['balls_add_thread']) . "' WHERE `name`='balls_add_thread'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['balls_add_post']) . "' WHERE `name`='balls_add_post'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['counters']) . "' WHERE `name`='counters'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['sendmail']) . "' WHERE `name`='sendmail'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['smtpport']) . "' WHERE `name`='smtpport'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['smtphost']) . "' WHERE `name`='smtphost'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['smtpusername']) . "' WHERE `name`='smtpusername'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['smtppassword']) . "' WHERE `name`='smtppassword'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['filetype_forum']) . "' WHERE `name`='filetype_forum'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['filesize_forum']) . "' WHERE `name`='filesize_forum'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['filecount_forum']) . "' WHERE `name`='filecount_forum'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['time_forum']) . "' WHERE `name`='time_forum'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['vote_forum']) . "' WHERE `name`='vote_forum'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['captcha_add_thread']) . "' WHERE `name`='captcha_add_thread'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['captcha_add_post']) . "' WHERE `name`='captcha_add_post'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['lastthread']) . "' WHERE `name`='lastthread'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['lastposts']) . "' WHERE `name`='lastposts'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['forum_time_edit_post']) . "' WHERE `name`='forum_time_edit_post'");
            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs(Cms::lang('module_settings'), Cms::lang('module_settings_update'));
            }
            Functions::redirect(Cms::setup('adminpanel') . '/setting');
            exit;
        }

        $dir = opendir(HOME . '/style/frontend/');
        while ($skin = readdir($dir)) {
            if (($skin != '.') && ($skin != '..') && ($skin != '.svn')) {
                $arrayrowskin[] = $skin;
            }
        }
        closedir($dir);
        
        $dirr = opendir(HOME . '/style/backend/');
        while ($adminskin = readdir($dirr)) {
            if (($adminskin != '.') && ($adminskin != '..') && ($adminskin != '.svn')) {
                $arrayrowadminskin[] = $adminskin;
            }
        }
        closedir($dirr);
        
         $dirlang = opendir(HOME . '/app/languages/');
        while  (false !== ($lang = readdir($dirlang))) {
           if (($lang == ".") || ($lang == '..')) continue;
                $arrayrowlang[] = pathinfo($lang, PATHINFO_FILENAME);
            
        }
        closedir($dirlang);
        

        $req = DB::run("SELECT * FROM `zone` ORDER BY `zone_name` ASC");
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $arrayrow[] = $row;
        }

        SmartySingleton::instance()->assign(array(
            'arrayrow' => $arrayrow,
            'arrayrowadminskin' => $arrayrowadminskin,
            'arrayrowlang' => $arrayrowlang,
            'arrayrowskin' => $arrayrowskin
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/setting/index.tpl');
    }

    function smiles() {
        $count = DB::run("SELECT COUNT(*) FROM `smiles`")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT * FROM `smiles` ORDER BY `id` ASC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/setting/smiles?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/setting/smiles.tpl');
    }

    function smiles_update() {
        DB::run("TRUNCATE TABLE `smiles`");
        $dir = scandir('files/smiles');
        natsort($dir);
        foreach ($dir as $v) {
            $ext = Recipe::getFileExtension($v);
            $c = str_replace('.' . $ext, '', $v);
            $c = ':' . $c . ':';
            if (($v != '.') && ($v != '..') && ($v != '.svn') && ($v != 'Thumbs.db')) {
                DB::run("INSERT INTO `smiles` SET `code`='" . $c . "', `photo`='" . $v . "'");
            }
        }

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs(Cms::lang('module_settings'), Cms::lang('module_settings_smiles'));
        }
        Functions::redirect(Cms::setup('adminpanel') . '/setting/smiles');
    }

}
