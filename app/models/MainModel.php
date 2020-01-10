<?php

class MainModel extends Base {

         function index()
      {
          if (empty($this->user['id'])) {
            $filter = "WHERE `type` = '0'";
        } 
        else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = "WHERE `type` != '2'";
        }

    $count = DB::run("SELECT COUNT(*) FROM `tema` $filter")->fetchColumn();
            if ($count > 0) {
                    $req = DB::run("SELECT `tema`.*,`users`.`login`, (SELECT `name` FROM `category` WHERE `category`.`id`=`tema`.`id_razdel`) AS `namecat` FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id` $filter ORDER BY `up` DESC,`time` DESC LIMIT ". $this->page . ", " . $this->message);
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    $arrayrow[] = $row;
                    }
                }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow'     => $arrayrow,
            'pagenav' => Functions::pagination('/' . $row['id'] . '?', $this->page, $count, $this->message)
            
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/index.tpl');
      }
      
    function setup_del($id) {
        set_time_limit(0);
        /* довольно затратная операция при большом кол-ве данных */
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $row['refid'] . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {
            if ($row['refid'] > 0) {
                $req = DB::run("SELECT `post`.*, (SELECT `countpost` FROM `users` WHERE `users`.`id`=`post`.`id_user`) AS `countpost` FROM `post` WHERE `id_forum` = '" . $row['id'] . "'");
                while ($post = $req->fetch(PDO::FETCH_ASSOC)) {
                    $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_forum` = '" . $row['id'] . "' AND `id_user`='" . $post['id_user'] . "'")->fetchColumn();
                    $countforum = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_forum`='" . $row['id'] . "'")->fetchColumn();
                    //обновляем кол-во постов у пользователей
                    DB::run("UPDATE `users` SET `countpost` = '" . Cms::Int($post['countpost'] - $count) . "' WHERE `id` = '" . $post['id_user'] . "'");
                    //у раздела
                    DB::run("UPDATE `category` SET `countpost` = '" . Cms::Int($forum['countpost'] - $countforum) . "' WHERE `id` = '" . $row['refid'] . "'");
                }

                $reqs = DB::run("SELECT `tema`.*, (SELECT `counttema` FROM `users` WHERE `users`.`id`=`tema`.`id_user`) AS `counttema` FROM `tema` WHERE `id_forum` = '" . $row['id'] . "'");
                while ($tema = $reqs->fetch(PDO::FETCH_ASSOC)) {
                    $counts = DB::run("SELECT COUNT(*) FROM `tema` WHERE `id_forum` = '" . $row['id'] . "' AND `id_user`='" . $tema['id_user'] . "'")->fetchColumn();
                    $countsforum = DB::run("SELECT COUNT(*) FROM `tema` WHERE `id_forum`='" . $row['id'] . "'")->fetchColumn();
                    //обновляем кол-во тем у пользователей
                    DB::run("UPDATE `users` SET `counttema` = '" . Cms::Int($tema['counttema'] - $counts) . "' WHERE `id` = '" . $tema['id_user'] . "'");
                    //у раздела
                    DB::run("UPDATE `category` SET `counttema` = '" . Cms::Int($forum['counttema'] - $countsforum) . "' WHERE `id` = '" . $row['refid'] . "'");
                }

                DB::run("DELETE FROM `category` WHERE `id` = '" . $row['id'] . "' LIMIT 1");
                DB::run("DELETE FROM `tema` WHERE `id_forum` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `post` WHERE `id_forum` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `tema_vote` WHERE `id_forum` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `tema_vote_us` WHERE `id_forum` = '" . $row['id'] . "'");

                $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_forum` = '" . $row['id'] . "'");
                while ($file = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                    Cms::DelFile('files/user/' . $file['id_user'] . '/' . $file['file']);
                    DB::run("DELETE FROM `post_files` WHERE `id` = '" . $file['id'] . "'");
                }

                /*
                  DB::run("OPTIMIZE TABLE `category`");
                  DB::run("OPTIMIZE TABLE `tema`");
                  DB::run("OPTIMIZE TABLE `post`");
                  DB::run("OPTIMIZE TABLE `post_files`");
                  DB::run("OPTIMIZE TABLE `tema_vote`");
                  DB::run("OPTIMIZE TABLE `tema_vote_us`"); */
            } else {
                $req = DB::run("SELECT `post`.*, (SELECT `countpost` FROM `users` WHERE `users`.`id`=`post`.`id_user`) AS `countpost` FROM `post` WHERE `id_razdel` = '" . $row['id'] . "'");
                while ($post = $req->fetch(PDO::FETCH_ASSOC)) {
                    $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_razdel` = '" . $row['id'] . "' AND `id_user`='" . $post['id_user'] . "'")->fetchColumn();
                    //обновляем кол-во постов у пользователей
                    if ($count > 0) {
                        DB::run("UPDATE `users` SET `countpost` = '" . Cms::Int($post['countpost'] - $count) . "' WHERE `id` = '" . $post['id_user'] . "'");
                    }
                }

                $reqs = DB::run("SELECT `tema`.*, (SELECT `counttema` FROM `users` WHERE `users`.`id`=`tema`.`id_user`) AS `counttema` FROM `tema` WHERE `id_razdel` = '" . $row['id'] . "'");
                while ($tema = $reqs->fetch(PDO::FETCH_ASSOC)) {
                    $counts = DB::run("SELECT COUNT(*) FROM `tema` WHERE `id_razdel` = '" . $row['id'] . "' AND `id_user`='" . $tema['id_user'] . "'")->fetchColumn();
                    //обновляем кол-во тем у пользователей
                    if ($counts > 0) {
                        DB::run("UPDATE `users` SET `counttema` = '" . Cms::Int($tema['counttema'] - $counts) . "' WHERE `id` = '" . $tema['id_user'] . "'");
                    }
                }

                DB::run("DELETE FROM `category` WHERE `id` = '" . $row['id'] . "' LIMIT 1");
                DB::run("DELETE FROM `category` WHERE `refid` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `tema` WHERE `id_razdel` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `post` WHERE `id_razdel` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `tema_vote` WHERE `id_razdel` = '" . $row['id'] . "'");
                DB::run("DELETE FROM `tema_vote_us` WHERE `id_razdel` = '" . $row['id'] . "'");

                $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_razdel` = '" . $row['id'] . "'");
                while ($file = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                    Cms::DelFile('files/user/' . $file['id_user'] . '/' . $file['file']);
                    DB::run("DELETE FROM `post_files` WHERE `id` = '" . $file['id'] . "'");
                }
                /*
                  DB::run("OPTIMIZE TABLE `category`");
                  DB::run("OPTIMIZE TABLE `tema`");
                  DB::run("OPTIMIZE TABLE `post`");
                  DB::run("OPTIMIZE TABLE `post_files`");
                  DB::run("OPTIMIZE TABLE `tema_vote`");
                  DB::run("OPTIMIZE TABLE `tema_vote_us`"); */
            }

            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs('Форум', 'Удаление раздела ' . $row['name']);
            } //пишем лог админа, если включено
            if ($row['refid'] > 0) {
                Functions::redirect(Cms::setup('home') . '/' . $row['refid']);
            } else
                Functions::redirect(Cms::setup('home') . '/');
        }

        if ($_POST['close'] && $row['refid'] > 0) {
            Functions::redirect(Cms::setup('home') . '/' . $row['refid']);
        }

        if ($_POST['close'] && $row['refid'] == 0) {
            Functions::redirect(Cms::setup('home') . '/');
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'forum' => $forum
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/setup_del.tpl');
    }

    function closed($id) {
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("UPDATE `tema` SET `closed`='1' WHERE `id`='" . $row['id'] . "'");

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs('Форум', 'Закрытие темы ' . $row['name']);
        } //пишем лог админа, если включено

        Functions::redirect(Cms::setup('home') . '/forums/thread-' . $row['id']);
    }

    function open($id) {
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("UPDATE `tema` SET `closed`='0' WHERE `id`='" . $row['id'] . "'");

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs('Форум', 'Открытие темы ' . $row['name']);
        } //пишем лог админа, если включено

        Functions::redirect(Cms::setup('home') . '/forums/thread-' . $row['id']);
    }

    function tema_up($id) {
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("UPDATE `tema` SET `up`='1' WHERE `id`='" . $row['id'] . "'");

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs('Форум', 'Закрепление темы ' . $row['name']);
        } //пишем лог админа, если включено

        Functions::redirect(Cms::setup('home') . '/forums/thread-' . $row['id']);
    }

    function tema_down($id) {
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        DB::run("UPDATE `tema` SET `up`='0' WHERE `id`='" . $row['id'] . "'");

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs('Форум', 'Открепление темы ' . $row['name']);
        } //пишем лог админа, если включено

        Functions::redirect(Cms::setup('home') . '/forums/thread-' . $row['id']);
    }

    function tema_setup($id) {
        $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $tema['id_razdel'] . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['name'])) < 3 || mb_strlen(Cms::Input($_POST['name'])) > 500) {
                $error .= 'Недопустимая длина названия темы!<br/>';
            }

            if (!isset($error)) {
                $f = DB::run("SELECT * FROM `category` WHERE `id`='" . Cms::Input($_POST['forum']) . "'")->fetch(PDO::FETCH_ASSOC);

                DB::run("UPDATE `tema` SET 
                    `id_razdel`='" . $f['id'] . "', 
                                `name` = '" . Cms::Input($_POST['name']) . "', 
                                    `translate` = '" . Functions::name_replace(Cms::Input($_POST['name'])) . "', 
                                       `type` = '" . $f['type'] . "' WHERE `id`='" . $tema['id'] . "'");

                 DB::run("UPDATE `category` SET `countthread` = '" . Cms::Int($f['countthread'] + 1) . "', `countpost` = '" . Cms::Int($f['countpost'] + 1) . "' WHERE `id` = '" . $f['id'] . "'");
               

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs('Форум', 'Отредактировал тему ' . $tema['name']);
                } //пишем лог админа, если включено

                Functions::redirect(Cms::setup('home') . '/forums/thread-' . $tema['id']);
            }
        }

        $reqsr = DB::run("SELECT * FROM `category` WHERE `realid`='0' ORDER BY `realid` ASC");
        while ($rowsr = $reqsr->fetch(PDO::FETCH_ASSOC)) {
            $arrayrowr[] = $rowsr;
        }

        SmartySingleton::instance()->assign(array(
            'tema' => $tema,
            'forum' => $forum,
            'error' => $error,
            'arrayrowr' => $arrayrowr

        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/tema_setup.tpl');
    }

    function tema_del($id) {
        $tema = DB::run("SELECT `tema`.*, (SELECT `counttema` FROM `users` WHERE `users`.`id`=`tema`.`id_user`) AS `counttema` FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $tema['id_razdel'] . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {
            //обновляем кол-во тем у пользователя
            DB::run("UPDATE `users` SET `counttema` = '" . Cms::Int($tema['counttema'] - 1) . "'  WHERE `id` = '" . $tema['id_user'] . "'");

            //обновляем кол-во тем у форума, подфорума
            DB::run("UPDATE `category` SET `countthread` = '" . Cms::Int($forum['countthread'] - 1) . "' WHERE `id` = '" . $forum['id'] . "'");

            $req = DB::run("SELECT `post`.*, (SELECT `countpost` FROM `users` WHERE `users`.`id`=`post`.`id_user`) AS `countpost` FROM `post` WHERE `id_tema` = '" . $tema['id'] . "'");
            while ($post = $req->fetch(PDO::FETCH_ASSOC)) {
                $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $tema['id'] . "' AND `id_user`='" . $post['id_user'] . "'")->fetchColumn();
                $countrazdel = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $tema['id'] . "' AND `id_razdel`='" . $post['id_razdel'] . "'")->fetchColumn();
                //обновляем кол-во постов у пользователей
                DB::run("UPDATE `users` SET `countpost` = '" . Cms::Int($post['countpost'] - $count) . "' WHERE `id` = '" . $post['id_user'] . "'");
                DB::run("UPDATE `category` SET `countpost` = '" . Cms::Int($forum['countpost'] - $countrazdel) . "' WHERE `id` = '" . $forum['id'] . "'");
            }

            $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_tema` = '" . $tema['id'] . "'");
            while ($file = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                Cms::DelFile('files/user/' . $file['id_user'] . '/' . $file['file']);
                DB::run("DELETE FROM `post_files` WHERE `id` = '" . $file['id'] . "'");
            }

            DB::run("DELETE FROM `tema` WHERE `id` = '" . $tema['id'] . "' LIMIT 1");
            DB::run("DELETE FROM `post` WHERE `id_tema` = '" . $tema['id'] . "'");

            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs('Форум', 'Удаление темы ' . Functions::esc($tema['name']));
            } //пишем лог админа, если включено
            Functions::redirect(Cms::setup('home') . '/');
        }

        SmartySingleton::instance()->assign(array(
            'tema' => $tema,
            'forum' => $forum
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/tema_del.tpl');
    }

    function post_setup($id) {
        $post = DB::run("SELECT * FROM `post` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $post['id_tema'] . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $post['id_razdel'] . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id'")->fetchColumn();
        $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['text'])) < 3 || mb_strlen(Cms::Input($_POST['text'])) > 10000) {
                $error .= 'Недопустимая длина текста сообщения!';
            }

            if (!isset($error)) {
                DB::run("UPDATE `post` SET `text` = '" . Cms::Input($_POST['text']) . "',
                        `timeedit` = '" . Cms::realtime() . "',
                        `kedit` = '" . Cms::Int($post['kedit'] + 1) . "',
                        `id_user_edit` = '" . $this->user['id'] . "' WHERE `id`='" . $post['id'] . "'");

                for ($i = 0; $i < count($_POST['del']); $i++) {
                    $file = DB::run("SELECT * FROM `post_files` WHERE `id`='" . Cms::Int($_POST['del'][$i]) . "'")->fetch(PDO::FETCH_ASSOC);
                    Cms::DelFile('files/user/' . $post['id_user'] . '/' . $file['file']);
                    DB::run("DELETE FROM `post_files` WHERE `id` = '" . $file['id'] . "'");
                }

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs('Форум', 'Отредактировал пост в теме ' . $tema['name']);
                } //пишем лог админа, если включено
                Functions::redirect(Cms::setup('home') . '/forums/thread-' . $tema['id'] . '?page=' . $starts . '#' . $post['id']);
            }
        }

        $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_post`='" . $post['id'] . "' ORDER BY `id` ASC");
        while ($rowfile = $reqfile->fetch(PDO::FETCH_ASSOC)) {
            $arrayrowfile[] = $rowfile;
        }

        SmartySingleton::instance()->assign(array(
            'row' => $post,
            'tema' => $tema,
            'forum' => $forum,
            'error' => $error,
            'starts' => $starts,
            'arrayrowfile' => $arrayrowfile,
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/post_setup.tpl');
    }

    function post_del($id) {
        $post = DB::run("SELECT `post`.*, (SELECT `countpost` FROM `users` WHERE `users`.`id`=`post`.`id_user`) AS `countpost` FROM `post` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $post['id_tema'] . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $post['id_razdel'] . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id'")->fetchColumn();
        $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

        if ($_POST['ok']) {
            DB::run("DELETE FROM `post` WHERE `id` = '" . $post['id'] . "' LIMIT 1");

            //обновляем кол-во постов у пользователя
            DB::run("UPDATE `users` SET `countpost` = '" . Cms::Int($post['countpost'] - 1) . "', `balls` = '" . Cms::Int($this->user['balls'] - 1) . "' WHERE `id` = '" . $post['id_user'] . "'");

            //обновляем кол-во постов у форума, подфорума
            DB::run("UPDATE `category` SET `countpost` = '" . Cms::Int($forum['countpost'] - 1) . "' WHERE `id` = '" . $forum['id'] . "'");

            $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_post` = '" . $post['id'] . "'");
            while ($file = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                Cms::DelFile('files/user/' . $file['id_user'] . '/' . $file['file']);
                DB::run("DELETE FROM `post_files` WHERE `id` = '" . $file['id'] . "'");
            }

            $post = DB::run("SELECT * FROM `post` WHERE `id_tema`='" . $tema['id'] . "' ORDER BY `id` DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);

            DB::run("UPDATE `tema` SET
                    `id_user_last` = '" . $post['id_user'] . "',
                        `id_post_last` = '" . $post['id'] . "',
                            `countpost` = '" . Cms::Int($tema['countpost'] - 1) . "' WHERE `id` = '" . $tema['id'] . "'");

            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs('Форум', 'Удаление поста к теме ' . Functions::esc($tema['name']));
            } //пишем лог админа, если включено

            $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id'")->fetchColumn();
            $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));
            Functions::redirect(Cms::setup('home') . '/forums/thread-' . $tema['id'] . '?page=' . $starts);
        }

        SmartySingleton::instance()->assign(array(
            'row' => $post,
            'text' => Cms::bbcode($post['text']),
            'tema' => $tema,
            'forum' => $forum,
            'starts' => $starts,
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/post_del.tpl');
    }

    function post_reply($id, $id2, $id3) {
        $post = DB::run("SELECT post. * , (SELECT `login` FROM `users` WHERE `users`.`id` = post.`id_user` ) AS `login` FROM `post` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        $rows = DB::run("SELECT * FROM `category` WHERE `id`='" . $id1 . "'")->fetch(PDO::FETCH_ASSOC);


        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id3'")->fetchColumn();
        $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

        Forum::AddPost($rows, $tema, $post);

        SmartySingleton::instance()->assign(array(
            'rows' => $rows,
            'row' => $post,
            'tema' => $tema,
            'starts' => $starts
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/post_reply.tpl');
    }

    function post_quote($id, $id2, $id3) {
        $post = DB::run("SELECT post. * , (SELECT `login` FROM `users` WHERE `users`.`id` = post.`id_user` ) AS `login` FROM `post` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        $rows = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id3'")->fetchColumn();
        $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

        Forum::AddPost($forum, $rows, $tema, $post);

        SmartySingleton::instance()->assign(array(
            'rows' => $rows,
            'row' => $post,
            'tema' => $tema,
            'starts' => $starts
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/post_quote.tpl');
    }

    function post($id,$id2) {
        $post = DB::run("SELECT post. * , " . User::data('post') . " FROM `post` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
      $tema = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema` = '" . $post['id_tema'] . "'  AND `id` " . (0 ? ">=" : "<=") . " '$id2'")->fetchColumn();
        $starts = max(0, (int) $count - (((int) $count % (int) $this->message) == 0 ? $this->message : ((int) $count % (int) $this->message)));

        SmartySingleton::instance()->assign(array(
            'rows' => $post,
            'tema' => $tema,
            'text' => Cms::bbcode($post['text']),
            'starts' => $starts
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/post.tpl');
    }

    function forum($id) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `tema` WHERE `id_razdel`='" . $row['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT `tema`.*,
                                    `users`.`login`
                                        FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id` WHERE `id_razdel`='" . $row['id'] . "'  ORDER BY `realid` = 0, `realid`, `up` DESC, `time` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $starts[] = max(0, (int) $rows['countpost'] - (((int) $rows['countpost'] % (int) $this->message) == 0 ? $this->message : ((int) $rows['countpost'] % (int) $this->message)));
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'starts' => $starts,
            'pagenav' => Functions::pagination('/forums/' . $row['id'] . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/forum.tpl');
    }

    function add() {
       if ($this->user['id'] && $this->user['level'] == 1) {
           $filter = " WHERE `type` != '2'";
        }
        $req = DB::run("SELECT * FROM `category`$filter ORDER BY `realid` ASC");
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
           $cat[] = $row;
       }

        if ($_POST['ok']) {

            if (mb_strlen(Cms::Input($_POST['name'])) < 3 || mb_strlen(Cms::Input($_POST['name'])) > 500) {
                $error .= 'Недопустимая длина названия темы!<br/>';
            }

            if (mb_strlen(Cms::Input($_POST['text'])) < 5 || mb_strlen(Cms::Input($_POST['text'])) > 10000) {
                $error .= 'Недопустимая длина текста сообщения!<br/>';
            }

            //ограничение на отправку сообщений
            if (DB::run("SELECT COUNT(*) FROM `antiflood` WHERE `ip`='" . Recipe::getClientIP() . "' AND `time` > '" . intval(Cms::realtime() - Cms::setup('antiflood')) . "'")->fetchColumn() > 0) {
                $error .= 'Вы не можете отправлять сообщения чаще 1 раза в ' . Functions::ending_second(Cms::setup('antiflood')) . '! Пожалуйста, немного подождите...<br/>';
            }

            if (Cms::setup('captcha_add_theme') == 1 && $_POST['captcha'] != $_COOKIE['code']) {
                $error .= 'Проверочное число с картинки введено не верно!<br/>';
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
            	$f = DB::run("SELECT * FROM `category` WHERE `id`='" . Cms::Input($_POST['cat']) . "'")->fetch(PDO::FETCH_ASSOC);
            	
                DB::run("INSERT INTO `tema` SET 
                    `id_razdel`='" . $f['id'] . "',
                     `realid` = '1',
                        `id_user` = '" . $this->user['id'] . "', 
                            `name` = '" . Cms::Input($_POST['name']) . "', 
                                `translate` = '" . Functions::name_replace(Cms::Input($_POST['name'])) . "', 
                                    `text` = '" . Cms::Input($_POST['text']) . "', 
                                        `time` = '" . Cms::realtime() . "', 
                                          `type` = '" . $f['type'] . "'");

                $fid = DB::lastInsertId();

                DB::run("INSERT INTO `post` SET 
                  `id_razdel`='" . $f['id'] . "',
                      `realid` = '1',
                        `id_tema` = '" . $fid . "', 
                            `id_user` = '" . $this->user['id'] . "', 
                                `text` = '" . Cms::Input($_POST['text']) . "', 
                                    `time` = '" . Cms::realtime() . "', 
                                       `type` = '" . $f['type'] . "'");

                $postid = DB::lastInsertId();

                DB::run("UPDATE `tema` SET
                        `id_user_last` = '" . $this->user['id'] . "',
                            `id_post_last` = '" . $postid . "',
                                `countpost` = '1' WHERE `id` = '" . $fid . "'");


                DB::run("UPDATE `users` SET `counttema` = '" . Cms::Int($this->user['counttema'] + 1) . "', `countpost` = '" . Cms::Int($this->user['countpost'] + 1) . "' WHERE `id` = '" . $this->user['id'] . "'");
                DB::run("UPDATE `category` SET `countthread` = '" . Cms::Int($f['countthread'] + 1) . "', `countpost` = '" . Cms::Int($f['countpost'] + 1) . "' WHERE `id` = '" . Cms::Input($_POST['cat']) . "'");


                Cms::antiflood(); //антифлуд
                Cms::addballs(Cms::setup('balls_add_thread'));//прибавляем баллы

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

                    if ((move_uploaded_file($_FILES['file']['tmp_name'][$i], 'files/user/' . $this->user['id'] . '/' . $ftp)) == true) {
                        DB::run("INSERT INTO `post_files` SET 
                            `id_razdel` = '" . Cms::Input($_POST['cat']) . "', 
                                    `id_tema` = '" . $fid . "', 
                                        `id_post` = '" . $postid . "',
                                            `id_user` = '" . $this->user['id'] . "', 
                                                `file` = '" . $ftp . "', 
                                                    `type` = '" . $typ . "', 
                                                        `size` = '" . Functions::size($fsizefile) . "', 
                                                            `time` = '" . Cms::realtime() . "'");
                    }
                }

                Functions::redirect(Cms::setup('home'));
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'cat'   => $cat,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/add.tpl');
    }

    function theme($id) {
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `post_files` WHERE `post_files`.`id_tema`=`tema`.`id`) AS `count`,
                        (SELECT COUNT(*) FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `countvote`,
                        (SELECT COUNT(*) FROM `tema_vote_us` WHERE `tema_vote_us`.`id_tema`=`tema`.`id`) AS `countvoteall`,
                        (SELECT `name` FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `namequestion` FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        Cms::addviews('tema', $tema); //подсчет кол-ва просмотров

        Forum::AddPost($forum, $tema); //добавление поста

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_tema`='" . $tema['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT post. * , " . User::data('post') . ",
                            (SELECT `text` FROM `post` WHERE `post`.`id` = post.`cit`) AS `textcit`,
                            (SELECT `login` FROM `users` WHERE `users`.`id` = post.`id_user_edit`) AS `login_edit`,
                            (SELECT COUNT(*) FROM `post_files` WHERE `post_files`.`id_post` = post.`id`) AS `count_file` FROM `post`
                            WHERE post.`id_tema` = '" . $tema['id'] . "' ORDER BY post.`id` ASC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $text[] = Cms::bbcode($rows['text']);
                $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_post`='" . $rows['id'] . "' ORDER BY `id` ASC");
                while ($rowfile = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                    $arrayrowfile[] = $rowfile;
                }
            }
        }

        //голосование, варианты
        $reqvote = DB::run("SELECT * FROM `tema_vote` WHERE `id_tema`='" . $tema['id'] . "' AND `type`='2' ORDER BY `id` ASC");
        while ($rowvote = $reqvote->fetch(PDO::FETCH_ASSOC)) {
            $arrayrowvote[] = $rowvote;
        }

        if ($_POST['vote'] && $this->user['id'] && DB::run("SELECT COUNT(*) FROM `tema_vote_us` WHERE `id_tema`='" . $tema['id'] . "' AND `id_user`='" . $this->user['id'] . "'")->fetchColumn() == 0) {

            if (empty($_POST['reply'])) {
                $errorvote = 'Выберите хотя бы один вариант!';
            }

            if (!isset($errorvote)) {
                DB::run("INSERT INTO `tema_vote_us` SET
                        `id_razdel` = '" . $forum['id'] . "', 
                                `id_tema` = '" . $tema['id'] . "', 
                                     `id_user` = '" . $this->user['id'] . "',
                                        `vote` = '" . Cms::Int($_POST['reply']) . "',
                                            `time` = '" . Cms::realtime() . "'");

                DB::run("UPDATE `tema_vote` SET `count` = `count` + 1 WHERE id = '" . Cms::Int($_POST['reply']) . "'");

                Functions::redirect($_SERVER['REQUEST_URI']);
            }
        }

        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'forum' => $forum,
            'tema' => $tema,
            'errorvote' => $errorvote,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'arrayrowfile' => $arrayrowfile,
            'arrayrowvote' => $arrayrowvote,
            'pagenav' => Functions::pagination('/forums/thread-' . $tema['id'] . '?', $this->page, $count, $this->message),
            'checkvote' => DB::run("SELECT COUNT(*) FROM `tema_vote_us` WHERE `id_tema`='" . $tema['id'] . "' AND `id_user`='" . $this->user['id'] . "'")->fetchColumn(),
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/tema.tpl');
    }

    function files($id, $id2, $id3) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `post_files` WHERE `post_files`.`id_tema`=`tema`.`id`) AS `count` FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `post_files` WHERE `id_tema`='" . $tema['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_tema`='" . $tema['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rowfile = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                $arrayrowfile[] = $rowfile;
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'forum' => $forum,
            'tema' => $tema,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'arrayrowfile' => $arrayrowfile,
            'pagenav' => Functions::pagination('/' . $forum['id'] . '/' . $row['id'] . '/' . $tema['id'] . '/files?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/files.tpl');
    }

    function new_thems() {

        if (empty($this->user['id'])) {
            $filter = " AND `type` = '0'";
        } else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = " AND `type` != '2'";
        }

        $count = DB::run("SELECT COUNT(*) FROM `tema` WHERE `time`>'" . intval(Cms::realtime() - Cms::setup('time_forum')) . "'$filter")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT `tema`.*,
                                    `users`.`login`
                                        FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id` WHERE `time`>'" . intval(Cms::realtime() - Cms::setup('time_forum')) . "'$filter ORDER BY `time` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $starts[] = max(0, (int) $rows['countpost'] - (((int) $rows['countpost'] % (int) $this->message) == 0 ? $this->message : ((int) $rows['countpost'] % (int) $this->message)));
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'starts' => $starts,
            'pagenav' => Functions::pagination('/new/thems?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/new_thems.tpl');
    }

    function new_posts() {

        if (empty($this->user['id'])) {
            $filter = " AND `type` = '0'";
        } else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = " AND `type` != '2'";
        }

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `time`>'" . intval(Cms::realtime() - Cms::setup('time_forum')) . "'$filter")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT post. * , " . User::data('post') . ",
                (SELECT `name` FROM `tema` WHERE `tema`.`id` = post.`id_tema`) AS `nametema`,
                (SELECT `text` FROM `post` WHERE `post`.`id` = post.`cit`) AS `textcit`,
                (SELECT COUNT(*) FROM `post_files` WHERE `post_files`.`id_post` = post.`id`) AS `count_file` FROM `post`
                WHERE post.`time` > '" . intval(Cms::realtime() - Cms::setup('time_forum')) . "'$filter ORDER BY post.`id` DESC  LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $text[] = Cms::bbcode($rows['text']);
                $reqfile = DB::run("SELECT * FROM `post_files` WHERE `id_post`='" . $rows['id'] . "' ORDER BY `id` ASC");
                while ($rowfile = $reqfile->fetch(PDO::FETCH_ASSOC)) {
                    $arrayrowfile[] = $rowfile;
                }
            }
        }

        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'arrayrowfile' => $arrayrowfile,
            'pagenav' => Functions::pagination('/new/posts?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/new_post.tpl');
    }

    function search($search) {

        if (empty($this->user['id'])) {
            $filter = " AND `type` = '0'";
        } else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = " AND `type` != '2'";
        }

        $search = $search ? $search : Cms::Input($_POST['search']);

        if (empty($search) && isset($_POST['ok'])) {
            $error = 'Задан пустой поисковый запрос!';
        }

        if (isset($_POST['ok'])) {
            Functions::redirect('/search/' . Functions::replace($search));
        }

        if ($search) {
            $search = mb_strtolower(urldecode($search), 'UTF-8');

            if ($search && mb_strlen($search) < 3) {
                $error = 'Общая длина поискового запроса должна быть не менее 3 букв.';
            }

            if (!isset($error)) {
                $count = DB::run("SELECT COUNT(*) FROM `tema` WHERE MATCH (name) AGAINST ('*" . $search . "*' IN BOOLEAN MODE)$filter")->fetchColumn();
                if ($count > 0) {
                    $req = DB::run("SELECT `tema`.*,
                                    `users`.`login`
                                        FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id` WHERE MATCH (name) AGAINST ('*" . $search . "*' IN BOOLEAN MODE)$filter ORDER BY `time` DESC LIMIT " . $this->page . ", " . $this->message);
                    while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                        $arrayrow[] = $rows;
                        $starts[] = max(0, (int) $rows['countpost'] - (((int) $rows['countpost'] % (int) $this->message) == 0 ? $this->message : ((int) $rows['countpost'] % (int) $this->message)));
                    }
                }
            }
        }
        SmartySingleton::instance()->assign(array(
            'error' => $error,
            'search' => $search,
            'starts' => $starts,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/search/' . $search . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/search.tpl');
    }

    function load($id, $id2, $id3, $id4) {
        $row = DB::run("SELECT * FROM `post_files` WHERE `id`='" . $id4 . "'")->fetch(PDO::FETCH_ASSOC);
        DB::run("UPDATE `post_files` SET `loadcounts` = '" . Cms::Int($row['loadcounts'] + 1) . "', `timeload` = '" . Cms::realtime() . "' WHERE `id` = '" . $row['id'] . "'");
        if ($row['type'] == 'png' || $row['type'] == 'jpg' || $row['type'] == 'jpeg' || $row['type'] == 'gif') {
            Functions::redirect(Cms::setup('home') . '/files/user/' . $row['id_user'] . '/' . $row['file']);
        } else {
            Download::load('files/user/' . $row['id_user'] . '/' . $row['file']);
        }
    }

    function vote($id, $id2) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `countvote` FROM `tema` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok'] && $tema['coutvote'] == 0) {
            if (mb_strlen(Cms::Input($_POST['name'])) < 5 || mb_strlen(Cms::Input($_POST['name'])) > 200) {
                $error .= 'Недопустимая длина названия опроса!<br/>';
            }

            for ($i = 1; $i < count($_POST['reply']); $i++) {
                if (Cms::Input($_POST['reply'][$i]) && mb_strlen(Cms::Input($_POST['reply'][$i])) < 1 || mb_strlen(Cms::Input($_POST['reply'][$i])) > 30) {
                    $error .= 'Недопустимая длина ответа №' . $i . '!<br/>';
                }
                if (Cms::Input($_POST['reply'][$i])) {
                    $not_empty++;
                }
            }

            if ($not_empty < 2) {
                $error .= 'Вы должны указать минимум 2 ответа!<br/>';
            }

            if (!isset($error)) {
                DB::run("INSERT INTO `tema_vote` SET 
                `id_razdel` = '" . $row['id'] . "', 
                        `id_tema` = '" . $tema['id'] . "', 
                            `id_user` = '" . $this->user['id'] . "', 
                                `name` = '" . Cms::Input($_POST['name']) . "', 
                                    `time` = '" . Cms::realtime() . "',
                                        `type` = '1'");

                for ($i = 1; $i < count($_POST['reply']); $i++) {
                    if (Cms::Input($_POST['reply'][$i])) {
                        DB::run("INSERT INTO `tema_vote` SET 
                        `id_razdel` = '" . $row['id'] . "', 
                                `id_tema` = '" . $tema['id'] . "', 
                                    `id_user` = '" . $this->user['id'] . "', 
                                        `name` = '" . Cms::Input($_POST['reply'][$i]) . "', 
                                            `time` = '" . Cms::realtime() . "',
                                                `type` = '2'");
                    }
                }
                Functions::redirect(Cms::setup('home') . '/forums/threaad-' . $tema['id']);
            }
        }

        for ($vote = 0; $vote < Cms::setup('vote_forum'); $vote++) {
            $array[] = $vote;
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'tema' => $tema,
            'error' => $error,
            'array' => $array
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/vote.tpl');
    }

    function vote_edit($id, $id2, $id3) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `countvote`,
                (SELECT `name` FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `namevote` FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `tema_vote` WHERE `id_tema`='" . $tema['id'] . "' AND `type`='2'")->fetchColumn();
        if ($count > 0) {
            $reqvote = DB::run("SELECT * FROM `tema_vote` WHERE `id_tema`='" . $tema['id'] . "' AND `type`='2' ORDER BY `id` ASC");
            while ($rowvote = $reqvote->fetch(PDO::FETCH_ASSOC)) {
                $arrayrowvote[] = $rowvote;
                ++$i2;
            }
        }

        for ($vote = $i2; $vote < Cms::setup('vote_forum'); $vote++) {
            $array[] = $vote;
        }

        if ($_POST['ok'] && $tema['countvote'] == 1) {
            if (mb_strlen(Cms::Input($_POST['name'])) < 5 || mb_strlen(Cms::Input($_POST['name'])) > 200) {
                $error .= 'Недопустимая длина названия опроса!<br/>';
            }

            for ($i = 1; $i < count($_POST['reply']); $i++) {
                if (Cms::Input($_POST['reply'][$i]) && mb_strlen(Cms::Input($_POST['reply'][$i])) < 1 || mb_strlen(Cms::Input($_POST['reply'][$i])) > 30) {
                    $error .= 'Недопустимая длина ответа №' . $i . '!<br/>';
                }
                if (Cms::Input($_POST['reply'][$i])) {
                    $not_empty++;
                }
            }

            if ($not_empty < 2) {
                $error .= 'Вы должны указать минимум 2 ответа!';
            }

            if (!isset($error)) {
                DB::run("UPDATE `tema_vote` SET `name` = '" . Cms::Input($_POST['name']) . "' WHERE `id_tema` = '" . $tema['id'] . "' AND `type` = '1'");

                for ($i = $count; $i < count($_POST['reply']); $i++) {
                    if (Cms::Input($_POST['reply'][$i])) {
                        DB::run("INSERT INTO `tema_vote` SET 
                        `id_razdel` = '" . $forum['id'] . "', 
                            `id_forum` = '" . $row['id'] . "', 
                                `id_tema` = '" . $tema['id'] . "', 
                                    `id_user` = '" . $this->user['id'] . "', 
                                        `name` = '" . Cms::Input($_POST['reply'][$i]) . "', 
                                            `time` = '" . Cms::realtime() . "',
                                                `type` = '2'");
                    }
                }

                $reqvote = DB::run("SELECT * FROM `tema_vote` WHERE `id_tema`='" . $tema['id'] . "' AND `type`='2' ORDER BY `id` ASC");
                while ($rowvote = $reqvote->fetch(PDO::FETCH_ASSOC)) {
                    ++$is;
                    if (Cms::Input($_POST['reply'][$is])) {
                        DB::run("UPDATE `tema_vote` SET `name` = '" . Cms::Input($_POST['reply'][$is]) . "' WHERE `id` = '" . $rowvote['id'] . "'");
                    } else {
                        DB::run("DELETE FROM `tema_vote` WHERE `id` = '" . $rowvote['id'] . "' LIMIT 1");
                        DB::run("DELETE FROM `tema_vote_us` WHERE `vote` = '" . $rowvote['id'] . "'");
                    }
                }
                Functions::redirect(Cms::setup('home') . '/' . $forum['id'] . '/' . $row['id'] . '/' . $tema['id']);
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'forum' => $forum,
            'tema' => $tema,
            'error' => $error,
            'array' => $array,
            'count' => $count,
            'arrayrowvote' => $arrayrowvote
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/vote_edit.tpl');
    }

    function vote_del($id, $id2, $id3) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `countvote`,
                (SELECT `name` FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `namevote` FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {
            DB::run("DELETE FROM `tema_vote` WHERE `id_tema` = '" . $tema['id'] . "'");
            DB::run("DELETE FROM `tema_vote_us` WHERE `id_tema` = '" . $tema['id'] . "'");
            Functions::redirect(Cms::setup('home') . '/' . $forum['id'] . '/' . $row['id'] . '/' . $tema['id']);
        }

        if ($_POST['close']) {
            Functions::redirect(Cms::setup('home') . '/' . $forum['id'] . '/' . $row['id'] . '/' . $tema['id']);
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'forum' => $forum,
            'tema' => $tema
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/vote_del.tpl');
    }

    function vote_all($id, $id2, $id3) {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        $forum = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $tema = DB::run("SELECT `tema`.*, (SELECT COUNT(*) FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `countvote`,
                (SELECT `name` FROM `tema_vote` WHERE `tema_vote`.`id_tema`=`tema`.`id` AND `type`='1') AS `namevote` FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `tema_vote_us` WHERE `id_tema`='" . $tema['id'] . "'")->fetchColumn();
        if ($count > 0) {
            $reqvote = DB::run("SELECT `tema_vote_us`.*, " . User::data('tema_vote_us') . ",
                (SELECT `name` FROM `tema_vote` WHERE `tema_vote`.`id`=`tema_vote_us`.`vote`) AS `option` FROM `tema_vote_us` WHERE `id_tema`='" . $tema['id'] . "' ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rowvote = $reqvote->fetch(PDO::FETCH_ASSOC)) {
                $arrayrowvote[] = $rowvote;
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'forum' => $forum,
            'tema' => $tema,
            'count' => $count,
            'arrayrow' => $arrayrowvote,
            'pagenav' => Functions::pagination(Cms::setup('home') . '/' . $forum['id'] . '/' . $row['id'] . '/' . $tema['id'] . '/vote/all?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/forum/vote_all.tpl');
    }

    function smiles() {
        if (empty($_SESSION['referer'])) {
            $_SESSION['referer'] = Recipe::getReferer();
        }
        $count = DB::run("SELECT COUNT(*) FROM `smiles`")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT `smiles`.* FROM `smiles` ORDER BY `id` ASC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/smiles?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/user/smiles.tpl');
    }
    function bbcode() {
        if (empty($_SESSION['referer'])) {
            $_SESSION['referer'] = Recipe::getReferer();
        }
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/user/bbcode.tpl');
    }
    
    function error404() {
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/error.tpl');
    }

    function bbcode_ajax() {
        $message = isset($_POST['data']) ? $_POST['data'] : '';
        SmartySingleton::instance()->assign(array(
            'message' => Cms::bbcode($message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/previews.tpl');
    }

    function captcha() {
        $width = Cms::setup('captcha_width'); //Ширина изображения
        $height = Cms::setup('captcha_height'); //Высота изображения
        $font_size = Cms::setup('captcha_font_size'); //Размер шрифта
        $let_amount = Cms::setup('captcha_let_amount'); //Количество символов, которые нужно набрать
        $fon_let_amount = Cms::setup('captcha_let_amount_fon'); //Количество символов, которые находятся на фоне
        $path_fonts = LIB . '/font/'; //Путь к шрифтам


        $letters = array(
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'j',
            'k',
            'm',
            'n',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '9'
        );
        $colors = array(
            '10',
            '30',
            '50',
            '70',
            '90',
            '110',
            '130',
            '150',
            '170',
            '190',
            '210'
        );

        $src = imagecreatetruecolor($width, $height);
        $fon = imagecolorallocate($src, 255, 255, 255);
        imagefill($src, 0, 0, $fon);

        $fonts = array();
        $dir = opendir($path_fonts);
        while ($fontName = readdir($dir)) {
            if ($fontName != "." && $fontName != "..") {
                $fonts[] = $fontName;
            }
        }
        closedir($dir);

        for ($i = 0; $i < $fon_let_amount; $i++) {
            $color = imagecolorallocatealpha($src, rand(0, 255), rand(0, 255), rand(0, 255), 100);
            $font = $path_fonts . $fonts[rand(0, sizeof($fonts) - 1)];
            $letter = $letters[rand(0, sizeof($letters) - 1)];
            $size = rand($font_size - 2, $font_size + 2);
            imagettftext($src, $size, rand(0, 45), rand($width * 0.1, $width - $width * 0.1), rand($height * 0.2, $height), $color, $font, $letter);
        }

        for ($i = 0; $i < $let_amount; $i++) {
            $color = imagecolorallocatealpha($src, $colors[rand(0, sizeof($colors) - 1)], $colors[rand(0, sizeof($colors) - 1)], $colors[rand(0, sizeof($colors) - 1)], rand(20, 40));
            $font = $path_fonts . $fonts[rand(0, sizeof($fonts) - 1)];
            $letter = $letters[rand(0, sizeof($letters) - 1)];
            $size = rand($font_size * 2.1 - 2, $font_size * 2.1 + 2);
            $x = ($i + 1) * $font_size + rand(4, 7);
            $y = (($height * 2) / 3) + rand(0, 5);
            $cod[] = $letter;
            imagettftext($src, $size, rand(0, 15), $x, $y, $color, $font, $letter);
        }

        $cod = implode('', $cod);

        setcookie('code', $cod, time() + 60 * 60 * 24, '/');

        // предотвращаем кэширование на стороне пользователя
        header("Expires: Wed, 1 Jan 1997 00:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        header("Content-type: image/gif");
        imagegif($src);
        imagedestroy($src);
    }

}



   

