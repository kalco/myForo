<?php

class Forum {

    function AddPost($razdel, $tema, $post = false) {
        if ($_POST['ok'] && User::$user['id'] && $tema['closed'] == 0) {

            if (mb_strlen(Cms::Input($_POST['text'])) < 3 || mb_strlen(Cms::Input($_POST['text'])) > 100000) {
                $error .= Cms::lang('error_length');
            }

            if (DB::run("SELECT COUNT(*) FROM `antiflood` WHERE `ip`='" . Recipe::getClientIP() . "' AND `time` > '" . intval(Cms::realtime() - Cms::setup('antiflood')) . "'")->fetchColumn() > 0) {
                $error .= Cms::lang('error_antiflood %s ', [Functions::ending_second(Cms::setup('antiflood'))]);
            }

            if (Cms::setup('captcha_add_post') == 1 && $_POST['captcha'] != $_COOKIE['code']) {
                $error .= Cms::lang('error_captcha');
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
                        $error .= Cms::lang('error_file_format_weight %s', [$ifnamefile]);
                    }
                    // Проверка файла на наличие только одного расширения
                    /*
                      if (count($ext) != 2)
                      $error .= 'Файл ' . $ftp . ' имеет двойное расширение!<br/>';
                      ; */
                    // Проверка недопустимых расширений файлов
                    if (!in_array($typ, $al_ext)) {
                        $error .= Cms::lang('error_file_format_type %s', [$ifnamefile]);
                    }

                    if ($typ == null) {
                        $error .= Cms::lang('error_file_format_weight_null %s', [$ifnamefile]);
                    }
                }
            }

            if (count($_FILES['file']['name']) > Cms::setup('filecount_forum')) {
                $error .= CMs::lang('error_file_limit %s', [Cms::setup('filecount_forum')]);
            }

            if (!isset($error)) {
                DB::run("INSERT INTO `post` SET 
                `id_razdel` = '" . $razdel['id'] . "', 
                        `id_tema` = '" . $tema['id'] . "', 
                            `id_user` = '" . $this->user['id'] . "', 
                                `text` = '" . Cms::Input($_POST['text']) . "', 
                                    `time` = '" . Cms::realtime() . "', 
                                        `type` = '" . $razdel['type'] . "'");

                $postid = DB::lastInsertId();

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

                    if ((move_uploaded_file($_FILES['file']['tmp_name'][$i], HOME . '/files/user/' . $this->user['id'] . '/forum/' . $ftp)) == true) {
                        DB::run("INSERT INTO `post_files` SET 
                            `id_razdel` = '" . $razdel['id'] . "', 
                                    `id_tema` = '" . $tema['id'] . "', 
                                        `id_post` = '" . $postid . "',
                                            `id_user` = '" . $this->user['id'] . "', 
                                                `file` = '" . $ftp . "', 
                                                    `type` = '" . $typ . "', 
                                                        `size` = '" . Functions::size($fsizefile) . "', 
                                                            `time` = '" . Cms::realtime() . "'");
                    }
                }

                //поднимаем тему выше
                DB::run("UPDATE `tema` SET
                        `id_user_last` = '" . $this->user['id'] . "',
                            `id_post_last` = '" . $postid . "',
                                `countpost` = '" . Cms::Int($tema['countpost'] + 1) . "',
                                    `time` = '" . Cms::realtime() . "' WHERE `id` = '" . $tema['id'] . "'");

                //обновляем кол-во постов у пользователя
                DB::run("UPDATE `users` SET `countpost` = '" . Cms::Int($this->user['countpost'] + 1) . "' WHERE `id` = '" . $this->user['id'] . "'");

                //обновляем кол-во постов у форума, подфорума
                DB::run("UPDATE `category` SET `countpost` = '" . Cms::Int($razdel['countpost'] + 1) . "' WHERE `id` = '" . $razdel['id'] . "'");

                $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema`=" . $tema['id'] . "")->fetchColumn();
                $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

                Cms::addballs(Cms::setup('balls_add_post')); //прибавляем баллы

                /* уведомляем */
                if ($_POST['reply'] == 1) {
                    Cms::notice($post['id_user'], User::$user['id'], Cms::lang('reply_you') . $_POST['text'] . ' [b][url=' . Cms::setup('home') . '/forums/thread-' . $tema['id'] . '/post/' . $postid . ']' . Functions::esc($tema['name']) . '[/url][/b]');
                }
                if ($_POST['quote'] == 1) {
                    Cms::notice($post['id_user'], User::$user['id'], Cms::lang('quote_you') . $_POST['text'] . ' [b][url=' . Cms::setup('home') . '/forums/thread-' . $tema['id'] . '/post/' . $postid . ']' . Functions::esc($tema['name']) . '[/url][/b]');
                }
                Functions::redirect(Cms::setup('home') . '/forums/thread-' . $tema['id'] . '?page=' . $starts . '#' . $postid);
            }
        }

        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
    }
}
