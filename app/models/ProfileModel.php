<?php

class ProfileModel extends Base {

    function index() {
        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['firstname'])) > 32) {
                $error .= 'Недопустимая длина имени!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['lastname'])) > 32) {
                $error .= 'Недопустимая длина фамилии!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['city'])) > 32) {
                $error .= 'Недопустимая длина названия города!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['email'])) < 5 || mb_strlen(Cms::Input($_POST['email'])) > 32) {
                $error .= 'Недопустимая длина e-mail!<br/>';
            }

            if (!filter_var(Cms::Input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $error .= 'Недопустимые символы в e-mail<br/>';
            }

            if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`!='" . $this->user['id'] . "' AND `email`='" . Cms::Input($_POST['email']) . "'")->fetchColumn() > 0) {
                $error .= 'Пользователь с этим e-mail уже зарегистрирован!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['phone'])) > 20) {
                $error .= 'Недопустимая длина номера телефона!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['skype'])) > 32) {
                $error .= 'Недопустимая длина skype!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['icq'])) > 10) {
                $error .= 'Недопустимая длина ICQ!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['about'])) > 500) {
                $error .= 'Недопустимая длина информации о себе!<br/>';
            }

            $do_filephoto = false;
            // Проверка загрузки с обычного браузера
            if ($_FILES['file']['size'] > 0) {
                $do_filephoto = true;
                $ifname = strtolower($_FILES['file']['name']);
                $type = pathinfo($ifname, PATHINFO_EXTENSION);
                //Конечное имя файла для сохранения с расширением
                $fnamephoto = Functions::passgen(25) . '.' . $type;
                $fsize = $_FILES['file']['size'];
            }

            //обработка файла
            if ($do_filephoto) {
                // Список допустимых расширений файлов.
                $al_ext = array(
                    'jpg',
                    'jpeg',
                    'gif',
                    'png'
                );
                $ext = explode(".", $fnamephoto);
                // Проверка файла на наличие только одного расширения
                if (count($ext) != 2) {
                    $error .= 'Запрещенный формат картинки!<br/>';
                }
                // Проверка допустимых расширений файлов
                if (!in_array($ext[1], $al_ext)) {
                    $error .= 'Не допустимый формат картинки!<br/>';
                }
                // Проверка на допустимый размер файла
                if ($fsize >= Cms::setup('filesize_photo') * 1024 * 1024) {
                    $error .= 'Недопустимый вес файла! Максимум ' . Cms::setup('filesize_photo') . ' Mb!<br/>';
                }

                $img = getimagesize($_FILES["file"]["tmp_name"]);
                if ($img[0] < 250) {
                    $error .= 'Ваша картинка слишком маленькая! Минимальный допустимый размер для загрузки составляет 250 пикселей по ширине!<br/>';
                }
            }

            if (!isset($error)) {
                DB::run("UPDATE `users` SET 
                    `firstname`='" . Cms::Input($_POST['firstname']) . "', 
                        `lastname`='" . Cms::Input($_POST['lastname']) . "', 
                            `email`='" . Cms::Input($_POST['email']) . "', 
                                `phone` = '" . Cms::Input($_POST['phone']) . "', 
                                   `skype`='" . Cms::Input($_POST['skype']) . "', 
                                       `icq`='" . Cms::Input($_POST['icq']) . "',
                                           `city`='" . Cms::Input($_POST['city']) . "',
                                                `about`='" . Cms::Input($_POST['about']) . "' WHERE `id`='" . $this->user['id'] . "'");

                if ((move_uploaded_file($_FILES["file"]["tmp_name"], HOME . '/files/user/' . $this->user['id'] . '/' . $fnamephoto)) == true) {
                    Cms::DelFile(HOME . '/files/user/' . $this->user['id'] . '/small-' . $this->user['avatar']);
                    Cms::DelFile(HOME . '/files/user/' . $this->user['id'] . '/view-' . $this->user['avatar']);
                    Cms::DelFile(HOME . '/files/user/' . $this->user['id'] . '/' . $this->user['avatar']);
                    $img = new SimpleImage();
                    $img->load(HOME . '/files/user/' . $this->user['id'] . '/' . $fnamephoto)->resize(48, 48)->save(HOME . '/files/user/' . $this->user['id'] . '/small-' . $fnamephoto);
                    $img->load(HOME . '/files/user/' . $this->user['id'] . '/' . $fnamephoto)->fit_to_width(100)->save(HOME . '/files/user/' . $this->user['id'] . '/view-' . $fnamephoto);
                    $img->load(HOME . '/files/user/' . $this->user['id'] . '/' . $fnamephoto)->fit_to_width(250)->save(HOME . '/files/user/' . $this->user['id'] . '/' . $fnamephoto);

                    DB::run("UPDATE `users` SET `avatar`='" . Cms::Input($fnamephoto) . "' WHERE `id`='" . $this->user['id'] . "'");
                }
                Functions::redirect(Cms::setup('home') . '/profile');
            }
        }
        SmartySingleton::instance()->assign(array(
            'error' => $error,

        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/index.tpl');
    }

    function mail() {
        $count = DB::run("SELECT COUNT(*) FROM `contacts` WHERE `id_user`= '" . $this->user['id'] . "' OR `user_id`= '" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT cn.*, 
                    (SELECT `login` FROM `users` WHERE `users`.`id`=cn.`id_user`) AS `login`,
                    (SELECT `avatar` FROM `users` WHERE `users`.`id`=cn.`id_user`) AS `avatar`,
                    (SELECT `login` FROM `users` WHERE `users`.`id`=cn.`user_id`) AS `login2`,
                    (SELECT `avatar` FROM `users` WHERE `users`.`id`=cn.`user_id`) AS `avatar2`,
                    (SELECT COUNT(1) FROM `mail` WHERE `mail`.`id_user`=cn.`id_user` AND `mail`.`user_id`=cn.`user_id` OR `mail`.`id_user`=cn.`user_id` AND `mail`.`user_id`=cn.`id_user`) AS `count_mail`,
                    (SELECT COUNT(1) FROM `mail` WHERE `mail`.`id_user`=cn.`id_user` AND `mail`.`user_id`='" . $this->user['id'] . "' AND `read` = '0' OR `mail`.`id_user`=cn.`user_id` AND `mail`.`user_id`='" . $this->user['id'] . "' AND `read` = '0') AS `count_mail_new` FROM `contacts` cn WHERE cn.`id_user`= '" . $this->user['id'] . "' OR cn.`user_id`= '" . $this->user['id'] . "' ORDER BY cn.`time` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/mail?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/mail.tpl');
    }

    function mail_id($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        //прочитываем сообщения
        if ($row['id'] != $this->user['id']) {
            DB::run("UPDATE LOW_PRIORITY `mail` SET `read` = '1' WHERE `user_id`= '" . $this->user['id'] . "' AND `id_user`= '" . $row['id'] . "'");
        }

        //добавляем в контакты
        if (DB::run("SELECT COUNT(*) FROM `contacts` WHERE `id_user` = '" . $this->user['id'] . "' AND `user_id` = '" . $row['id'] . "' OR `id_user` = '" . $row['id'] . "' AND `user_id` = '" . $this->user['id'] . "'")->fetchColumn() == 0 && $this->user['id'] > 0) {
            DB::run("INSERT INTO `contacts` SET 
            `id_user`='" . $this->user['id'] . "',
                `user_id`='" . $row['id'] . "',
                    `time`='" . Cms::realtime() . "'");
        }

        if ($_POST['ok'] && DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . $row['id'] . "' AND `user_id`='" . $this->user['id'] . "'")->fetchColumn() == 0) {
            if (mb_strlen(Cms::Input($_POST['text'])) < 1 || mb_strlen(Cms::Input($_POST['text'])) > 5000) {
                $error .= 'Недопустимая длина текста сообщения!<br/>';
            }

            //ограничение на отправку сообщений
            if (DB::run("SELECT COUNT(*) FROM `antiflood` WHERE `ip`='" . Recipe::getClientIP() . "' AND `time` > '" . Cms::Int(Cms::realtime() - Cms::setup('antiflood')) . "'")->fetchColumn() > 0) {
                $error .= 'Вы не можете отправлять сообщения чаще 1 раза в ' . ending_second(Cms::setup('antiflood')) . '! Пожалуйста, немного подождите...<br/>';
            }

            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                $do_file = false;
                // Проверка загрузки с обычного браузера
                if ($_FILES['file']['size'][$i] > 0) {
                    $do_file = true;
                    $ifnamefile = strtolower($_FILES['file']['name'][$i]);
                    $typ = pathinfo($ifnamefile, PATHINFO_EXTENSION);
                    $rand = rand(11111, 99999); //случайное число	
                    //Конечное имя файла для сохранения без расширения
                    $fnamefile = Functions::name_replace($ifnamefile);
                    //Конечное имя файла для сохранения с расширением
                    $ftp = Functions::name_replace(Functions::truncate($ifnamefile, 200)) . '_' . $rand . '_' . strtoupper(str_replace('http://', '', Cms::setup('home'))) . '.' . $typ;
                    $fsizefile = $_FILES['file']['size'][$i];
                }

                //обработка файла
                if ($do_file) {
                    // Список недопустимых расширений файлов.
                    $al_ext = explode(", ", Cms::setup('filetype_forum'));
                    $ext = explode(".", $ftp);
                    // Проверка на допустимый размер файла
                    if ($fsizefile >= Cms::setup('filesize_forum') * 1024 * 1024) {
                        $error .= 'Недопустимый вес файла ' . $ifnamefile . '!<br/>';
                    }
                    // Проверка файла на наличие только одного расширения
                    /*
                      if (count($ext) != 2)
                      $error .= 'Файл ' . $ftp . ' имеет двойное расширение!<br/>';
                      ; */
                    // Проверка недопустимых расширений файлов
                    if (!in_array($typ, $al_ext)) {
                        $error .= 'Запрещенный тип файла ' . $ifnamefile . '!<br/>';
                    }

                    if ($typ == null) {
                        $error .= 'Файл ' . $ifnamefile . ' не имеет расширения!<br/>';
                    }
                }
            }

            if (count($_FILES['file']['name']) > Cms::setup('filecount_forum')) {
                $error .= 'Вы не можете загрузить больше ' . Cms::setup('filecount_forum') . ' файлов!';
            }

            if (!isset($error)) {
                DB::run("UPDATE `contacts` SET `time` = '" . Cms::realtime() . "' WHERE `id_user`= '" . $this->user['id'] . "' AND `user_id`= '" . $row['id'] . "'");

                DB::run("INSERT INTO `mail` SET 
                        `id_user`='" . $this->user['id'] . "',
                            `user_id`='" . $row['id'] . "',
                                `text`='" . Cms::Input($_POST['text']) . "',
                                    `time`='" . Cms::realtime() . "'");

                $fid = DB::lastInsertId();
                ;

                Cms::antiflood(); //антифлуд

                /* обработка загрузки файлов */
                for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                    $do_file = false;
                    // Проверка загрузки с обычного браузера
                    if ($_FILES['file']['size'][$i] > 0) {
                        $do_file = true;
                        $ifnamefile = strtolower($_FILES['file']['name'][$i]);
                        $typ = pathinfo($ifnamefile, PATHINFO_EXTENSION);
                        $rand = rand(11111, 99999); //случайное число	
                        //Конечное имя файла для сохранения без расширения
                        $fnamefile = Functions::name_replace($ifnamefile);
                        //Конечное имя файла для сохранения с расширением
                        $ftp = Functions::name_replace(Functions::truncate($ifnamefile, 200)) . '_' . $rand . '_' . strtoupper(str_replace('http://', '', Cms::setup('home'))) . '.' . $typ;
                        $fsizefile = $_FILES['file']['size'][$i];
                    }

                    if ((move_uploaded_file($_FILES['file']['tmp_name'][$i], HOME . '/files/user/' . $this->user['id'] . '/files/' . $ftp)) == true) {
                        DB::run("INSERT INTO `mail_files` SET 
                                `id_user` = '" . $this->user['id'] . "', 
                                    `user_id` = '" . $row['id'] . "',
                                        `id_mail` = '" . $fid . "', 
                                            `file` = '" . $ftp . "', 
                                                `type` = '" . $typ . "', 
                                                    `size` = '" . Functions::size($fsizefile) . "', 
                                                        `time` = '" . Cms::realtime() . "'");
                    }
                }

                Functions::redirect(Cms::setup('home') . '/profile/mail/' . $row['id']);
            }
        }

        $count = DB::run("SELECT COUNT(*) FROM `mail` WHERE `id_user`= '" . $this->user['id'] . "' AND `user_id`= '" . $row['id'] . "' OR `id_user`= '" . $row['id'] . "' AND `user_id`= '" . $this->user['id'] . "'")->fetchColumn();
        if ($count) {
            $req = DB::run("SELECT mail.*, (SELECT COUNT(*) FROM `mail_files` WHERE `mail_files`.`id_mail` = mail.`id`) AS `count_file`,
                    " . User::data('mail') . " FROM `mail` WHERE mail.`id_user`= '" . $this->user['id'] . "' AND mail.`user_id`= '" . $row['id'] . "' OR mail.`id_user`= '" . $row['id'] . "' AND mail.`user_id`= '" . $this->user['id'] . "' ORDER BY mail.`id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $text[] = Cms::bbcode($rows['text']);
                $reqfile = DB::run("SELECT * FROM `mail_files` WHERE `id_mail`='" . $rows['id'] . "' ORDER BY `id` ASC");
                while ($rowfile = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                    $arrayrowfile[] = $rowfile;
                }
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'text' => $text,
            'error' => $error,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'arrayrowfile' => $arrayrowfile,
            'blacklist' => DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . $row['id'] . "' AND `user_id`='" . $this->user['id'] . "'")->fetchColumn(),
            'pagenav' => Functions::pagination('/profile/mail/' . $row['id'] . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/mail.tpl');
    }

    function mail_load($id) {
        $row = DB::run("SELECT * FROM `mail_files` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        DB::run("UPDATE `mail_files` SET `loadcounts` = '" . Cms::Int($row['loadcounts'] + 1) . "', `timeload` = '" . Cms::realtime() . "' WHERE `id` = '" . $row['id'] . "'");
        Download::load('files/user/' . $row['id_user'] . '/files/' . $row['file']);
    }
    
    function setup() {
        if ($_POST['ok']) {

            if (Cms::Input($_POST['message']) < 5 || Cms::Input($_POST['message']) > 100) {
                $error .= 'Недопустимое значение кол-ва сообщений на страницу!<br/>';
            }

            if ($_POST['message'] && preg_match('#[^0-9]#ui', $_POST['message'])) {
                $error .= 'Разрешено вводить только цифры!';
            }

            if (!isset($error)) {
                DB::run("UPDATE `users` SET 
                    `skin` = '" . Cms::Input($_POST['skin']) . "', 
                      `lang` = '" . Cms::Input($_POST['lang']) . "', 
                         `message`='" . Cms::Int($_POST['message']) . "', 
                             `timezone`='" . Cms::Input($_POST['timezone']) . "' WHERE `id`='" . $this->user['id'] . "'");

                Functions::redirect(Cms::setup('home') . '/profile/setup');
            }
        }

        $dir = opendir(HOME . '/style/frontend/');
        while ($skin = readdir($dir)) {
            if (($skin != '.') && ($skin != '..') && ($skin != '.svn') && ($skin != 'admin')) {
                $arrayrowskin[] = $skin;
            }
        }
        closedir($dir);
        
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
            'error' => $error,
            'arrayrow' => $arrayrow,
            'arrayrowlang' => $arrayrowlang,
            'arrayrowskin' => $arrayrowskin
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/setup.tpl');
    }
    
    function security() {

        if ($_POST['ok']) {

            $users = DB::run("SELECT * FROM `users` WHERE `id` = '" . $this->user['id'] . "' AND `pass` = '" . crypt($_POST['oldpass'], '$6$rounds=5000$usesomesillystringforsalt$') . "'")->fetch(PDO::FETCH_ASSOC);
            if ($this->user['pass'] != $users['pass']) {
                $error .= 'Старый пароль не верен!<br/>';
            }

            if (mb_strlen($_POST['newpass']) < 6 || mb_strlen($_POST['newpass']) > 32) {
                $error .= 'Недопустимая длина нового пароля!<br/>';
            }

            if ($_POST['newpass'] != $_POST['newpass_confirm']) {
                $error .= 'Пароли не совпадают!';
            }

            if (!isset($error)) {
                DB::run("UPDATE `users` SET 
                    `pass` = '" . crypt($_POST['newpass'], '$6$rounds=5000$usesomesillystringforsalt$') . "', 
                        `hashcode` = '" . crypt($_POST['newpass'] . '' . $this->user['date_reg'], '$6$rounds=5000$usesomesillystringforsalt$') . "' WHERE `id`='" . $this->user['id'] . "'");

                SmartySingleton::instance()->assign('newpassword', $_POST['newpass']);
                // инициализируем класс
                $mailer = new phpmailer();
                //настройки
                $mailer->Mailer = Cms::setup('sendmail');
                $mailer->Host = Cms::setup('smtphost');
                $mailer->Port = Cms::setup('smtpport');
                $mailer->Username = Cms::setup('smtpusername');
                $mailer->Password = Cms::setup('smtppassword');
                // Устанавливаем тему письма
                $mailer->Subject = "Ваш новый пароль";
                //задаем e-mail админа
                $mailer->From = Cms::setup('emailadmin');
                $mailer->ContentType = 'text/html';
                // Задаем тело письма
                $mailer->Body = SmartySingleton::instance()->fetch(SMARTY_TEMPLATE_LOAD . '/templates/mail/newpass.tpl');
                // Добавляем адрес в список получателей
                $mailer->AddAddress($this->user['email'], $this->user['login']);
                $mailer->Send();

                setcookie('hashcode', '', 0, '/');
                setcookie('hashcode', crypt($_POST['newpass'] . '' . $this->user['date_reg'], '$6$rounds=5000$usesomesillystringforsalt$'), Cms::realtime() + 60 * 60 * 24 * 7, '/');

                Functions::redirect(Cms::setup('home') . '/profile');
            }
        }

        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/security.tpl');
    }

    function history() {
        //список
        $count = DB::run("SELECT COUNT(*) FROM `history` WHERE `id_user`='" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT * FROM `history` WHERE `id_user`='" . $this->user['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/history?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/history.tpl');
    }
    
    function history_clear() {
        if ($_POST['ok']) {
            DB::run("DELETE FROM `history` WHERE `id_user`='" . $this->user['id'] . "'");
            Functions::redirect('/profile/history');
        }
          Functions::redirect('/profile/history');
    }

    function bookmark() {
        //список
        $count = DB::run("SELECT COUNT(*) FROM `bookmark` WHERE `id_user`='" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT * FROM `bookmark` WHERE `id_user`='" . $this->user['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/bookmark?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/bookmark.tpl');
    }

    function bookmark_add() {
        if (DB::run("SELECT COUNT(*) FROM `bookmark` WHERE `id_user`='" . $this->user['id'] . "' AND `url`='" . Cms::Input($_REQUEST['url']) . "'")->fetchColumn() > 0) {
            $error = 'Страницу ' . Cms::Input($_REQUEST['url']) . ' Вы уже добавили в закладки!';
        }

        if (!isset($error)) {
            DB::run("INSERT INTO `bookmark` SET 
            `id_user`='" . $this->user['id'] . "', 
                `name`='" . Cms::Input($_REQUEST['name']) . "', 
                    `url`='" . Cms::Input($_REQUEST['url']) . "', 
                        `time`='" . Cms::realtime() . "'");

            Functions::redirect(Recipe::getReferer());
        }

        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/bookmark_add.tpl');
    }

    function bookmark_edit($id) {
        $row = DB::run("SELECT * FROM `bookmark` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['name'])) < 5 || mb_strlen(Cms::Input($_POST['name'])) > 250) {
                $error .= 'Недопустимая длина названия!<br/>';
            }

            if (!isset($error)) {
                DB::run("UPDATE `bookmark` SET 
                `name`='" . Cms::Input($_POST['name']) . "', 
                    `url` = '" . Cms::Input($_POST['url']) . "' WHERE `id`='" . $row['id'] . "'");
                Functions::redirect(Cms::setup('home') . '/profile/bookmark');
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/bookmark_edit.tpl');
    }

    function bookmark_del($id) {
        $row = DB::run("SELECT * FROM `bookmark` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {
            DB::run("DELETE FROM `bookmark` WHERE `id` = '" . $row['id'] . "' LIMIT 1");
            Functions::redirect(Cms::setup('home') . '/profile/bookmark');
        }

        if ($_POST['close']) {
            Functions::redirect(Cms::setup('home') . '/profile/bookmark');
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/bookmark_del.tpl');
    }

    function notice() {
        //список
        $count = DB::run("SELECT COUNT(*) FROM `notice` WHERE `id_user`='" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT notice. * , (SELECT `login` FROM `users` WHERE `users`.`id` = notice.`user_id` ) AS `login` FROM `notice` WHERE `id_user`='" . $this->user['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
                $text[] = Cms::bbcode($row['text']);
            }
        }

        //прочитываем уведомления
        if (DB::run("SELECT COUNT(*) FROM `notice` WHERE `id_user`='" . $this->user['id'] . "' AND `status`='1'")->fetchColumn()) {
            DB::run("UPDATE `notice` SET `status`='0' WHERE `id_user`='" . $this->user['id'] . "'");
        }

        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/notice?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/notice.tpl');
    }

    function friends() {
        //список
        $count = DB::run("SELECT COUNT(*) FROM `friends` WHERE `id_user`='" . $this->user['id'] . "' OR `user_id`= '" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT cn.*, (SELECT `login` FROM `users` WHERE `users`.`id`=cn.`id_user`) AS `login`,
                                         (SELECT `avatar` FROM `users` WHERE `users`.`id`=cn.`id_user`) AS `avatar` ,
                    (SELECT `login` FROM `users` WHERE `users`.`id`=cn.`user_id`) AS `login2`
                            FROM `friends` cn WHERE cn.`id_user`= '" . $this->user['id'] . "' OR cn.`user_id`= '" . $this->user['id'] . "' ORDER BY cn.`time` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/friends?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/friends.tpl');
    }

    function friends_add($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $blacklist = DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . $row['id'] . "' AND `user_id`='" . $this->user['id'] . "'")->fetchColumn();

        if ($blacklist == 0) {
            DB::run("INSERT INTO `friends` SET 
            `id_user`='" . $this->user['id'] . "',
                `user_id`='" . $row['id'] . "',
                    `time`='" . Cms::realtime() . "'");
            Cms::notice($row['id'], $this->user['id'], 'Отправил заявку в [url=' . Cms::setup('home') . '/profile/friends]друзья[/url]!');
        }

        SmartySingleton::instance()->assign(array(
            'blacklist' => $blacklist
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/friends_add.tpl');
    }

    function friends_del($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("DELETE FROM `friends` WHERE `id_user`='" . $this->user['id'] . "' AND `user_id`='" . $row['id'] . "' OR `id_user`='" . $row['id'] . "' AND `user_id`='" . $this->user['id'] . "' LIMIT 1");

        Cms::notice($row['id'], $this->user['id'], 'Удалил Вас из друзей!');

        SmartySingleton::instance()->assign(array(
            'row' => $row
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/friends_del.tpl');
    }

    function friends_yes($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("UPDATE `friends` SET `status`='1' WHERE `id_user`='" . $row['id'] . "' AND `user_id`='" . $this->user['id'] . "' LIMIT 1");

        Cms::notice($row['id'], $this->user['id'], 'Принял заявку в друзья!');

        SmartySingleton::instance()->assign(array(
            'row' => $row
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/friends_yes.tpl');
    }

    function blacklist() {
        $count = DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . $this->user['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT blacklist. * , 
            (SELECT `login` FROM `users` WHERE `users`.`id` = blacklist.`user_id`) AS `login`,
            (SELECT `avatar` FROM `users` WHERE `users`.`id`= blacklist.`user_id`) AS `avatar` 
            FROM `blacklist` WHERE `id_user`='" . $this->user['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/profile/blacklist?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/profile/blacklist.tpl');
    }

    function blacklist_add($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("INSERT INTO `blacklist` SET 
            `id_user`='" . $this->user['id'] . "',
                `user_id`='" . $row['id'] . "',
                    `time`='" . Cms::realtime() . "'");

        Cms::notice($row['id'], $this->user['id'], 'Добавил Вас в черный список!');

        Functions::redirect(Cms::setup('home') . '/profile/blacklist');
    }

    function blacklist_del($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("DELETE FROM `blacklist` WHERE `id_user`='" . $this->user['id'] . "' AND `user_id`='" . $row['id'] . "' LIMIT 1");

        Cms::notice($row['id'], $this->user['id'], 'Удалил Вас из черного списка!');

        Functions::redirect(Cms::setup('home') . '/profile/blacklist');
    }
}
