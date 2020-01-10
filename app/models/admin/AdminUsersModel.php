<?php

class AdminUsersModel extends Base {

    function index() {
           $count = DB::run("SELECT COUNT(*) FROM `users`")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT * FROM `users` ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/users?', $this->page, $count, Cms::setup('message'))
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/users/index.tpl');
    }
    
    function add() {
        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['login'])) < 3 || mb_strlen(Cms::Input($_POST['login'])) > 32) {
               $error .= Cms::lang('error_length_invalid');
            }

            if (Cms::Input($_POST['login']) && !preg_match("#^([A-zА-я0-9\-\_\ ])+$#ui", Cms::Input($_POST['login']))) {
                $error .= Cms::lang('error_login_spec_char');
            }

            if (Cms::Input($_POST['login']) && !preg_match("#^[a-z0-9]+$#i", Cms::Input($_POST['login']))) {
                $error .= Cms::lang('error_login_wrong');
            }

            if (mb_strlen(Cms::Input($_POST['password'])) < 6 || mb_strlen(Cms::Input($_POST['password'])) > 32) {
                $error .= Cms::lang('error_password_l');
            }

            if (mb_strlen(Cms::Input($_POST['email'])) < 5 || mb_strlen(Cms::Input($_POST['email'])) > 32) {
               $error .= Cms::lang('error_email_l');
            }

            if (!filter_var(Cms::Input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
               $error .= Cms::lang('error_email_invalid');
            }

            if (DB::run("SELECT COUNT(*) FROM `users` WHERE `login`='" . Cms::Input($_POST['login']) . "'")->fetchColumn() > 0) {
                $error .= Cms::lang('error_already_reg');
            }

            if (DB::run("SELECT COUNT(*) FROM `users` WHERE `email`='" . Cms::Input($_POST['email']) . "'")->fetchColumn() > 0) {
                 $error .= Cms::lang('error_already_reg_email');           
            }

            if (!isset($error)) {
                DB::run("INSERT INTO `users` SET 
                    `login` = '" . Cms::Input($_POST['login']) . "', 
                        `email` = '" . Cms::Input($_POST['email']) . "', 
                            `pass` = '" . crypt(Cms::Input($_POST['password']), '$6$rounds=5000$usesomesillystringforsalt$') . "', 
                                `hashcode` = '" . crypt(Cms::Input($_POST['password']) . '' . Cms::realtime(), '$6$rounds=5000$usesomesillystringforsalt$') . "', 
                                    `date_reg` =  '" . Cms::realtime() . "', 
                                      `date_last` =  '" . Cms::realtime() . "',
                                         `level` = '". Cms::Input($_POST['level']) . "',
                                              `activation` =  '" . null . "'");


                $fid = DB::lastInsertId();

                mkdir(HOME . '/files/user/' . $fid);
                mkdir(HOME . '/files/user/' . $fid . '/forum');
                
           if (Cms::setup('adminlogs') == 1) {
                   Cms::adminlogs(Cms::lang('module_users'), Cms::lang('module_users_add %s', [Cms::Input($_POST['login'])]));
                } 
            }
                

        }
          Functions::redirect(Cms::setup('adminpanel') . '/users');

        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
    }

    function edit($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['login'])) < 3 || mb_strlen(Cms::Input($_POST['login'])) > 32) {
                $error = Cms::lang('error_length_invalid');
            }

            if (!preg_match("#^([A-zА-я0-9\-\_\ ])+$#ui", Cms::Input($_POST['login']))) {
                $error = Cms::lang('error_login_spec_char');
            }

            if (!preg_match("#^[a-z0-9]+$#i", Cms::Input($_POST['login']))) {
                $error = Cms::lang('error_login_wrong');
            }

            if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`!='" . $row['id'] . "' AND `login`='" . Cms::Input($_POST['login']) . "'")->fetchColumn() > 0) {
                $error .= Cms::lang('error_already_reg');
            }
            
             if (mb_strlen(Cms::Input($_POST['pass'])) < 6 || mb_strlen(Cms::Input($_POST['pass'])) > 32) {
                $error .= Cms::lang('error_password_l');
            }

            if (mb_strlen(Cms::Input($_POST['firstname'])) > 32) {
                $error .= Cms::lang('error_firstname_l');
            }

            if (mb_strlen(Cms::Input($_POST['lastname'])) > 32) {
                $error .= Cms::lang('error_lastname_l');
            }

            if (mb_strlen(Cms::Input($_POST['city'])) > 32) {
                $error .= Cms::lang('error_city_l');
            }

            if (mb_strlen(Cms::Input($_POST['email'])) < 5 || mb_strlen(Cms::Input($_POST['email'])) > 32) {
                $error .= Cms::lang('error_email_l');
            }

            if (!filter_var(Cms::Input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $error .= Cms::lang('error_email_invalid');
            }

            if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`!='" . $row['id'] . "' AND `email`='" . Cms::Input($_POST['email']) . "'")->fetchColumn() > 0) {
                $error .= Cms::lang('error_already_reg_email');
            }

            if (mb_strlen(Cms::Input($_POST['phone'])) > 20) {
                $error .= Cms::lang('error_phone_l');
            }

            if (mb_strlen(Cms::Input($_POST['skype'])) > 32) {
                $error .= Cms::lang('error_skype_l');
            }

            if (mb_strlen(Cms::Input($_POST['icq'])) > 10) {
                $error .= Cms::lang('error_icq_l');
            }

            if (mb_strlen(Cms::Input($_POST['about'])) > 500) {
                $error .= Cms::lang('error_about_l');
            }

            if (!isset($error)) {
                DB::run("UPDATE `users` SET 
                    `login`='" . Cms::Input($_POST['login']) . "', 
                        `firstname`='" . Cms::Input($_POST['firstname']) . "', 
                            `lastname`='" . Cms::Input($_POST['lastname']) . "', 
                                `email`='" . Cms::Input($_POST['email']) . "', 
                                  `pass` = '" . crypt(Cms::Input($_POST['pass']), '$6$rounds=5000$usesomesillystringforsalt$') . "', 
                                   `hashcode` = '" . crypt(Cms::Input($_POST['pass']) . '' . Cms::realtime(), '$6$rounds=5000$usesomesillystringforsalt$') . "',
                                     `phone` = '" . Cms::Input($_POST['phone']) . "', 
                                        `skype`='" . Cms::Input($_POST['skype']) . "', 
                                            `icq`='" . Cms::Input($_POST['icq']) . "',
                                               `city`='" . Cms::Input($_POST['city']) . "',
                                                    `about`='" . Cms::Input($_POST['about']) . "',
                                                        `balls`='" . Cms::Input($_POST['balls']) . "',
                                                            `level`='" . Cms::Input($_POST['level']) . "' WHERE `id`='" . $row['id'] . "'");

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_users'), Cms::lang('module_users_edit %s', [Cms::Input($_POST['login'])]));
                }
                Functions::redirect(Cms::setup('adminpanel') . '/users');
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/users/edit.tpl');
    }

    function del($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

            if ($row['level'] == 100) {
               Functions::redirect(Cms::setup('adminpanel') . '/users');
            }

                DB::run("DELETE FROM `mail` WHERE `id_user` = '" . $row['id'] . "' OR `user_id` = '" . $row['id'] . "'");
    
                DB::run("DELETE FROM `contacts` WHERE `id_user` = '" . $row['id'] . "' OR `user_id` = '" . $row['id'] . "'");
        
                DB::run("DELETE FROM `mail_files` WHERE `id_user` = '" . $row['id'] . "'");
        
                DB::run("DELETE FROM `blacklist` WHERE `id_user` = '" . $row['id'] . "' OR `user_id` = '" . $row['id'] . "'");
 
                DB::run("DELETE FROM `friends` WHERE `id_user` = '" . $row['id'] . "' OR `user_id` = '" . $row['id'] . "'");

               
                $t = DB::run("SELECT * FROM `tema` WHERE `id_user` = '" . $row['id'] . "'");
                while ($tema = $t->fetch(PDO::FETCH_ASSOC)) {
                    DB::run("DELETE FROM `tema` WHERE `id` = '" . $tema['id'] . "'");
                    DB::run("DELETE FROM `post` WHERE `id_tema` = '" . $tema['id'] . "'");
                    DB::run("DELETE FROM `tema_vote` WHERE `id_tema` = '" . $tema['id'] . "'");
                    DB::run("DELETE FROM `tema_vote_us` WHERE `id_tema` = '" . $tema['id'] . "'");
                    DB::run("DELETE FROM `post_files` WHERE `id_tema` = '" . $tema['id'] . "'");
                }
               
                DB::run("DELETE FROM `bookmark` WHERE `id_user` = '" . $row['id'] . "'");
               
                $a = DB::run("SELECT * FROM `ads` WHERE `id_user` = '" . $row['id'] . "'");
                while ($ads = $a->fetch(PDO::FETCH_ASSOC)) {
                    DB::run("DELETE FROM `ads` WHERE `id` = '" . $ads['id'] . "'");
                    DB::run("DELETE FROM `ads_stat` WHERE `id_link` = '" . $ads['id'] . "'");
                }
              
                DB::run("DELETE FROM `adminlogs` WHERE `id_user` = '" . $row['id'] . "'");
               
                DB::run("DELETE FROM `notice` WHERE `id_user` = '" . $row['id'] . "'");
               
                DB::run("DELETE FROM `userlogs` WHERE `id_user` = '" . $row['id'] . "'");
               
                DB::run("DELETE FROM `history` WHERE `id_user` = '" . $row['id'] . "'");
               
                DB::run("DELETE FROM `online` WHERE `id_user` = '" . $row['id'] . "'");
              
                Cms::DelDir('files/user/' . $row['id']);
                
                DB::run("DELETE FROM `users` WHERE `id` = '" . $row['id'] . "'");

              
                if ($_POST['optimize'] == 1) {
                    DB::run("OPTIMIZE TABLE `news_comments`");
                    DB::run("OPTIMIZE TABLE `mail`");
                    DB::run("OPTIMIZE TABLE `contacts`");
                    DB::run("OPTIMIZE TABLE `mail_files`");
                    DB::run("OPTIMIZE TABLE `blacklist`");
                    DB::run("OPTIMIZE TABLE `friends`");
                    DB::run("OPTIMIZE TABLE `tema`");
                    DB::run("OPTIMIZE TABLE `post`");
                    DB::run("OPTIMIZE TABLE `tema_vote`");
                    DB::run("OPTIMIZE TABLE `tema_vote_us`");
                    DB::run("OPTIMIZE TABLE `post_files`");
                    DB::run("OPTIMIZE TABLE `bookmark`");
                    DB::run("OPTIMIZE TABLE `ads`");
                    DB::run("OPTIMIZE TABLE `ads_stat`");
                    DB::run("OPTIMIZE TABLE `adminlogs`");
                    DB::run("OPTIMIZE TABLE `notice`");
                    DB::run("OPTIMIZE TABLE `userlogs`");
                    DB::run("OPTIMIZE TABLE `history`");
                    DB::run("OPTIMIZE TABLE `online`");
                }

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_users'), Cms::lang('module_users_del %s',  [Functions::esc($row['login'])]));
                }
                                    Functions::redirect(Cms::setup('adminpanel') . '/users');
    }

    function ban($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok'] && $row['level'] < 100) {

            if (empty($_POST['count'])) {
                $error = Cms::lang('error_ban_time');
            }

            if (!isset($error)) {
                DB::run("UPDATE `users` SET `ban`='1',
                            `banprichina`='" . Cms::Input($_POST['text']) . "',
                                `bantime`='" . Cms::Input(Cms::realtime() + $_POST['count'] * $_POST['time'] * 86400) . "' WHERE `id`='" . $row['id'] . "'");

                SmartySingleton::instance()->assign('row', $row);
                SmartySingleton::instance()->assign('banprichina', Cms::bbcode($_POST['text']));
               
                $mailer = new phpmailer();
               
                $mailer->Mailer = Cms::setup('sendmail');
                $mailer->Host = Cms::setup('smtphost');
                $mailer->Port = Cms::setup('smtpport');
                $mailer->Username = Cms::setup('smtpusername');
                $mailer->Password = Cms::setup('smtppassword');
                $mailer->Subject = Cms::lang('email_title_ban %s', [Cms::setup('home')]);
                $mailer->From = Cms::setup('emailadmin');
                $mailer->ContentType = 'text/html';
                $mailer->Body = SmartySingleton::instance()->fetch(SMARTY_TEMPLATE_LOAD . '/templates/mail/ban.tpl');
                $mailer->AddAddress($row['email'], $row['login']);
                $mailer->Send();

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_users'), Cms::lang('module_users_ban %s', [$row['login']]));
                } 
                Functions::redirect(Cms::setup('adminpanel') . '/users');
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/users/ban.tpl');
    }

    function unban($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {

            if (!isset($error)) {
                DB::run("UPDATE `users` SET `ban`='0',
                            `banprichina`='',
                                `bantime`='0' WHERE `id`='" . $row['id'] . "'");

                SmartySingleton::instance()->assign('row', $row);
                SmartySingleton::instance()->assign('banprichina', Cms::bbcode($_POST['text']));
                $mailer = new phpmailer();
                $mailer->Mailer = Cms::setup('sendmail');
                $mailer->Host = Cms::setup('smtphost');
                $mailer->Port = Cms::setup('smtpport');
                $mailer->Username = Cms::setup('smtpusername');
                $mailer->Password = Cms::setup('smtppassword');
                $mailer->Subject = Cms::lang('email_title_unban %s', [Cms::setup('home')]);
                $mailer->From = Cms::setup('emailadmin');
                $mailer->ContentType = 'text/html';
                $mailer->Body = SmartySingleton::instance()->fetch(SMARTY_TEMPLATE_LOAD . '/templates/mail/unban.tpl');
                $mailer->AddAddress($row['email'], $row['login']);
                $mailer->Send();

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_users'), Cms::lang('module_users_unban %s', [$row['login']]));
                } 
                Functions::redirect(Cms::setup('adminpanel') . '/users');
            }
        }

        if ($_POST['close']) {
            Functions::redirect(Cms::setup('adminpanel') . '/users');
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/users/unban.tpl');
    }

}
