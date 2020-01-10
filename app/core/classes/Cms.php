<?php

class Cms {

    //настройки сайта
    static function setting() {
        $setting = DB::run("SELECT * FROM `setting`");
        $setup = array();
        while ($set = $setting->fetch(PDO::FETCH_ASSOC)) {
            $setup[$set['name']] = $set['value'];
        }
        return $setup;
    }

    //вытаскиваем одну настройку
    static function setup($name) {
        $query = DB::run("SELECT * FROM `setting` WHERE `name`='" . $name . "'")->fetch(PDO::FETCH_ASSOC);
        return $query['value'];
    }


    static function lang($string, $args = null)
    {   
   return Lang::instance()->translate($string, $args);
     }
     
     static function getLang($strings = [])
     {
         
    return Lang::instance()->getTranslations($strings = []);
     }
     
    //шапка сайта
    static function header($title, $keywords = false, $description = false) {
        SmartySingleton::instance()->assign(array(
            'title'          => $title ." :: ". self::setup('namesite'),
            'title2'         => $title, 
            'keywords'       => $keywords,
            'description'    => $description,
            'smile'          => self::smile(),
            'lastthems'      => self::lastthems(),
            'lastposts'      => self::lastposts(),
            'pages'          => self::pages(),
            'catcount'       => self::categories(),
            'users'          => DB::run("SELECT COUNT(*) FROM `users`")->fetchColumn(),
            'last'           => DB::run("SELECT `id`, `login` FROM `users` ORDER BY `id` DESC")->fetch(PDO::FETCH_ASSOC),
            'users_admin'    => DB::run("SELECT COUNT(*) FROM `users` WHERE `level`>'1'")->fetchColumn(),
            'tema'           => DB::run("SELECT COUNT(*) FROM `tema`")->fetchColumn(),
            'post'           => DB::run("SELECT COUNT(*) FROM `post`")->fetchColumn(),
            'usersonline'    => DB::run("SELECT COUNT(*) FROM `online` WHERE `type` = '1'")->fetchColumn(),
            'guestonline'    => DB::run("SELECT COUNT(*) FROM `online` WHERE `type` = '2'")->fetchColumn(),
            'bookmark'       => DB::run("SELECT COUNT(*) FROM `bookmark` WHERE `id_user`='" .User::$user['id'] . "'")->fetchColumn(),
            'history'        => DB::run("SELECT COUNT(*) FROM `history` WHERE `id_user`='" . User::$user['id'] . "'")->fetchColumn(),
            'notice'         => DB::run("SELECT COUNT(*) FROM `notice` WHERE `id_user`='" . User::$user['id'] . "'")->fetchColumn(),
            'mail'           => DB::run("SELECT COUNT(*) FROM `mail` WHERE `id_user`= '" . User::$user['id'] . "' OR `user_id`= '" . User::$user['id'] . "'")->fetchColumn(),
            'blacklist'      => DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . User::$user['id'] . "'")->fetchColumn(),
            'friends'        => DB::run("SELECT COUNT(*) FROM `friends` WHERE `id_user`='" . User::$user['id'] . "' OR `user_id`='" . User::$user['id'] . "'")->fetchColumn(),
            'friendsnew'     => DB::run("SELECT COUNT(*) FROM `friends` WHERE `user_id`='" . User::$user['id'] . "' AND `status`='0'")->fetchColumn(),
            'adsheadindex'   => Ads::head_index(),
            'adsheadnoindex' => Ads::head_no_index(),
            'adshead'        => Ads::head(),
            'adsfoot'        => Ads::foot(),
            'adsleft'        => Ads::left()
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/system/header.tpl');
    }
    
        static function header_404($title) {
              SmartySingleton::instance()->assign(array(
            'title'          => $title ." :: ". self::setup('namesite'),
            'title2'         => $title 
            ));
        }
    
        static function header_admin($title, $description) {
        SmartySingleton::instance()->assign(array(
            'title'          => $title ." :: ". self::setup('namesite'),
            'title2'         => $title, 
            'description'    => $description,
            'smile'          => self::smile(),
            'users'          => DB::run("SELECT COUNT(*) FROM `users`")->fetchColumn(),
            'users_admin'    => DB::run("SELECT COUNT(*) FROM `users` WHERE `level`>'1'")->fetchColumn(),
            'tema'           => DB::run("SELECT COUNT(*) FROM `tema`")->fetchColumn(),
            'pages'          => DB::run("SELECT COUNT(*) FROM `pages`")->fetchColumn(),
            'usersonline'    => DB::run("SELECT COUNT(*) FROM `online` WHERE `type` = '1'")->fetchColumn(),
            'guestonline'    => DB::run("SELECT COUNT(*) FROM `online` WHERE `type` = '2'")->fetchColumn()

        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/header.tpl');
    }

    //футер сайта
    static function footer() {
        SmartySingleton::instance()->assign(array(
            'times_page' => round(Functions::times_page() - TIMESTART, 4),
             'year' => date('Y'),
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/system/footer.tpl');
    }
    
    static function footer_admin() {
        SmartySingleton::instance()->assign(array(
            'times_page' => round(Functions::times_page() - TIMESTART, 4),
            'year' => date('Y'),
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/footer.tpl');
    }

    //текущее время
    static function realtime($time) {
        if (User::$user['id']) {
            date_default_timezone_set(User::$user['timezone']);
        } //временная зона авторизованного пользователя
        else {
            date_default_timezone_set(self::setup('timezone'));
        } //временная зона сайта
        $time = intval(time());
        return $time;
    }

    static function NoDataAdmin($table, $id) {
        $counts = DB::run("SELECT COUNT(*) FROM `$table` WHERE `id`='" . intval($id) . "'")->fetchColumn();
        if ($counts == 0) {
            SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/no.tpl');
            self::footer();
            exit;
        }
    }

    function DelFile($file) {
        if (is_file($file)) {
            unlink($file);
        }
    }

    function DelDir($directory) {
        $dir = scandir($directory);
        $dir = array_slice($dir, 2);
        foreach ($dir as $file) {
            $file = $directory . '/' . $file;
            if (is_dir($file)) {
                self::DelDir($file);
                if (is_dir($file)) {
                    rmdir($file);
                }
            } else {
                unlink($file);
            }
        }
        rmdir($directory);
    }

    function mres($value) {
        $search = array(
            "\\",
            "\x00",
            "\n",
            "\r",
            "'",
            '"',
            "\x1a"
        );
        $replace = array(
            "\\\\",
            "\\0",
            "\\n",
            "\\r",
            "\'",
            '\"',
            "\\Z"
        );

        return str_replace($search, $replace, $value);
    }

    function Input($txt) {
        $txt = preg_replace('!<script[^>]*>(.)*</script>!Uis', '', $txt); //вырезаем js
        $txt = htmlentities(trim($txt), ENT_QUOTES, 'UTF-8');
        //$txt = preg_replace('~<script[^>]*>.*?</script>~si', '', $txt);  
        //$txt = preg_replace('!<script[^>]*>(.)*</script>!Uis', '', $txt); 
        $txt = stripslashes($txt); // удаляем слэши
        $txt = trim($txt); // удаляем пробелы по бокам (если нужно только с одного бока удалить пробелы есть функции ltrim() и rtrim()
        $txt = htmlspecialchars($txt); // переводим HTML в текст
        $txt = preg_replace("~ +~", " ", $txt); // множественные пробелы заменяем на одинарные
        $txt = preg_replace("/(\r\n){3,}/", "\r\n\r\n", $txt); // убираем лишние переводы строк
        $txt = str_replace("\'", "&#39;", $txt);
        $txt = str_replace('\\', "&#92;", $txt);
        $txt = str_replace("|", "I", $txt);
        $txt = str_replace("||", "I", $txt);
        $txt = str_replace("/\\\$/", "&#36;", $txt);
        //$simb = array("'","`");
        //$txt=str_replace($simb,"",$txt);
        $txt = self::mres($txt);
        # Если точно знаете, что в форме ничего кроме цифр и текста не будет снимите комментарий
        # $txt= preg_replace ("/[^a-zA-Zа-яА-Я0-9-_.]/","",$txt);
        return $txt; //возвращаем переменную
    }

    function Int($txt) {
        return abs(intval($txt));
    }

    // Admin Log
    function adminlogs($modul, $text) {
        DB::run("INSERT INTO `adminlogs` SET 
            `id_user`='" . User::$user['id'] . "',
                `modul`='" . $modul . "', 
                    `text`='" . $text . "', 
                        `ip`='" . Recipe::getClientIP() . "', 
                            `browser`='" . Recipe::getBrowser() . "', 
                                `time`='" . self::realtime() . "'");
    }

    // Login History
    function history($id) {
        DB::run("INSERT INTO `history` SET 
            `id_user`='" . $id . "',
                `ip`='" . Recipe::getClientIP() . "', 
                    `browser`='" . Recipe::getBrowser() . "', 
                        `time`='" . self::realtime() . "'");
    }

    //у Notification
    function notice($id_user, $user_id, $text, $url = false) {
        DB::run("INSERT INTO `notice` SET 
            `id_user`='" . intval($id_user) . "',
                `user_id`='" . intval($user_id) . "',
                    `text`='" . self::Input($text) . "', 
                        `url`='" . self::Input($url) . "', 
                            `time`='" . self::realtime() . "'");
    }

    // AntiFlood
    function antiflood() {
        DB::run("INSERT INTO `antiflood` SET 
                    `ip`='" . Recipe::getClientIP() . "', 
                        `time`='" . self::realtime() . "'");
    }

    //автоочистка
    function AutoClear() {
        //очищаем антифлуд
        if (DB::run("DELETE FROM `antiflood` WHERE `time` < '" . intval(self::realtime() - 300) . "'")) {
            DB::run("OPTIMIZE TABLE `antiflood`");
        }
        
         if (DB::run("DELETE FROM `notice` WHERE `time` < '" . intval(self::realtime() - 604800) . "'")) {
            DB::run("OPTIMIZE TABLE `notice`");
        }

        //очищяем онлайн
        if (DB::run("DELETE FROM `online` WHERE `time` < '" . intval(self::realtime() - 300) . "'")) {
            DB::run("OPTIMIZE TABLE `online`");
        }
        //снимаем бан
        if (DB::run("SELECT `ban`, `bantime` FROM `users` WHERE `bantime` < '" . intval(self::realtime()) . "'")) {
            DB::run("UPDATE `users` SET `ban` = '0' WHERE `bantime` < '" . intval(self::realtime()) . "'");
        }
    }

    //бб коды для текста
    function bbcode($text) {
        $bbcode = new BBcode;
        $text = $bbcode->bb($text);
        $text = $bbcode->smiles($text);
        return $text;
    }
    
    //смайлы пользователя или гостя
    function smile() {
            $count = DB::run("SELECT COUNT(*) FROM `smiles`")->fetchColumn();
            if ($count > 0) {
                $req = DB::run("SELECT * FROM `smiles` ORDER BY rand() LIMIT " . self::setup('count_smiles'));
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    $arrayrow[] = $row;
                
            }
        }
        return $arrayrow;
    }

   
    //голосование
    function addrating($tablefirst, $table, $ref, $user) {
        if (isset($_POST['ok']) && $user) {
            if (DB::run("SELECT COUNT(*) FROM `$table` WHERE `refid`='" . $ref['id'] . "' AND `id_user`='" . $user . "'")->fetchColumn() == 0) {
                DB::run("INSERT INTO `$table` SET 
                    `refid`='" . $ref['id'] . "', 
                        `id_user`='" . $user . "', 
                           `rating`='" . intval($_POST['rating']) . "', 
                               `time`='" . self::realtime() . "'");
                //вычисляем рейтинг
                $count = DB::run("SELECT COUNT(*) FROM `$table` WHERE `refid`='" . $ref['id'] . "'")->fetchColumn();
                $countsum = DB::run("SELECT SUM(`rating`) FROM `$table` WHERE `refid`='" . $ref['id'] . "'")->fetchColumn();
                $ratingall = $countsum / $count;

                DB::run("UPDATE `$tablefirst` SET `rating` = '" . round($ratingall, 2) . "' WHERE `id`='" . intval($ref['id']) . "'");
            }
        }
    }

    //добавляем 1 просмотр к выбранному модулю
    function addviews($table, $refid) {
        DB::run("UPDATE `$table` SET `views` = '" . intval($refid['views'] + 1) . "' WHERE `id` = '" . $refid['id'] . "'");
    }

    //прибавляем баллы
    function addballs($module) {
        if (User::$user['id']) {
            DB::run("UPDATE `users` SET `balls` = '" . self::Int(User::$user['balls'] + $module) . "' WHERE `id` = '" . User::$user['id'] . "'");
        }
    }

    //новые темы на форуме
    function lastthems() {
        if (empty(User::$user['id'])) {
            $filter = " WHERE `type` = '0'";
        } else if (User::$user['id'] && User::$user['level'] == 1) {
            $filter = " WHERE `type` != '2'";
        }

        $array = DB::run("SELECT `tema`.*,
                                    `users`.`login`
                                        FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id`$filter ORDER BY `time` DESC LIMIT " . self::setup('lastthread'))->fetchAll();
        return $array;
    }
    
        function lastposts() {
        if (empty(User::$user['id'])) {
            $filter = " WHERE `type` = '0'";
        } else if (User::$user['id'] && User::$user['level'] == 1) {
            $filter = " WHERE `type` != '2'";
        }

        $array = DB::run("SELECT `post`.*,
                                    `users`.`login`
                                        FROM `post` LEFT JOIN `users` ON `post`.`id_user` = `users`.`id`$filter ORDER BY `time` DESC LIMIT " . self::setup('lastposts'))->fetchAll();
        return $array;
    }
    
    function pages() {
                $array = DB::run("SELECT * FROM `pages` ORDER BY `id`");
    
                  return  $array;
            }
            
     function categories()
      {
        if (empty(User::$user['id'])) {
            $filter = " WHERE `type` = '0'";
        } else if (User::$user['id'] && User::$user['level'] == 1) {
            $filter = " WHERE `type` != '2'";
        }
 
                $array = DB::run("SELECT * FROM `category` $filter ORDER BY `realid` ASC");
                
                return   $array;
}
}
