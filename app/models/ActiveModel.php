<?php

class ActiveModel extends Base {

   
    function thems($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if (empty($this->user['id'])) {
            $filter = " AND `type` = '0'";
        } else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = " AND `type` != '2'";
        }

        $count = DB::run("SELECT COUNT(*) FROM `tema` WHERE `id_user`='" . $row['id'] . "'$filter")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT `tema`.*,
                                    `users`.`login`
                                        FROM `tema` LEFT JOIN `users` ON `tema`.`id_user_last` = `users`.`id` WHERE `id_user`='" . $row['id'] . "'$filter ORDER BY `realid` = 0, `realid`, `up` DESC, `time` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
                $starts[] = max(0, (int) $rows['countpost'] - (((int) $rows['countpost'] % (int) $this->message) == 0 ? $this->message : ((int) $rows['countpost'] % (int) $this->message)));
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'starts' => $starts,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/active/thems/' . $row['id'] . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/active/thems.tpl');
    }

    function posts($id) {
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if (empty($this->user['id'])) {
            $filter = " AND `type` = '0'";
        } else if ($this->user['id'] && $this->user['level'] == 1) {
            $filter = " AND `type` != '2'";
        }

        $count = DB::run("SELECT COUNT(*) FROM `post` WHERE `id_user`='" . $row['id'] . "'$filter")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT post. * , " . User::data('post') . ",
                (SELECT `name` FROM `tema` WHERE `tema`.`id` = post.`id_tema`) AS `nametema`,
                (SELECT COUNT(*) FROM `post_files` WHERE `post_files`.`id_post` = post.`id`) AS `count_file` FROM `post`
                WHERE `id_user`='" . $row['id'] . "'$filter ORDER BY `id` DESC  LIMIT " . $this->page . ", " . $this->message);
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
            'row' => $row,
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination('/active/posts/' . $row['id'] . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD . '/templates/modules/active/posts.tpl');
    }

}
