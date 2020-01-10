<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: ProfileController.php               #
##############################################
class ProfileController {

    function __construct() {
        $this->model = new ProfileModel();
        if (User::$user['id'] == null) {
            Functions::redirect(Cms::setup('home'));
        }
    }

    function index() {
        Cms::header(Cms::lang('my_profile'));
        $this->model->index();
        Cms::footer();
    }

    function mail() {
        Cms::header(Cms::lang('my_inbox'));
        $this->model->mail();
        Cms::footer();
    }

    function mail_id($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id']) {
            Functions::redirect('/profile');
        }
        Cms::header(Cms::lang('conversations_with %s', [Functions::esc($row['login'])]));
        $this->model->mail_id($id);
        Cms::footer();
    }

    function mail_load($id) {
        if (DB::run("SELECT COUNT(*) FROM `mail_files` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->mail_load($id);
    }

    function setup() {
        Cms::header(Cms::lang('my_settings'));
        $this->model->setup();
        Cms::footer();
    }
    function security() {
        Cms::header(Cms::lang('my_security'));
        $this->model->security();
        Cms::footer();
    }

    function history() {
        Cms::header(Cms::lang('my_login_history'));
        $this->model->history();
        Cms::footer();
    }

    function history_clear() {
        $this->model->history_clear();
    }
    function bookmark() {
        Cms::header(Cms::lang('my_bookmark'));
        $this->model->bookmark();
        Cms::footer();
    }

    function notice() {
        Cms::header(Cms::lang('my_notifications'));
        $this->model->notice();
        Cms::footer();
    }

    function bookmark_add() {
        Cms::header(Cms::lang('my_bookmark_add'));
        $this->model->bookmark_add();
        Cms::footer();
    }

    function bookmark_edit($id) {
        if (DB::run("SELECT COUNT(*) FROM `bookmark` WHERE `id`='" . $id . "' AND `id_user`='" . User::$user['id'] . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }

        $row = DB::run("SELECT * FROM `bookmark` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        Cms::header(Cms::lang('my_bookmark_edit %s', [Functions::esc($row['name'])]));
        $this->model->bookmark_edit($id);
        Cms::footer();
    }

    function bookmark_del($id) {
        if (DB::run("SELECT COUNT(*) FROM `bookmark` WHERE `id`='" . $id . "' AND `id_user`='" . User::$user['id'] . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }

        $row = DB::run("SELECT * FROM `bookmark` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        Cms::header(Cms::lang('my_bookmark_del %s', [Functions::esc($row['name'])]));
        $this->model->bookmark_del($id);
        Cms::footer();
    }

    function friends() {
        Cms::header(Cms::lang('my_friends'));
        $this->model->friends();
        Cms::footer();
    }

    function friends_add($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id'] || DB::run("SELECT COUNT(*) FROM `friends` WHERE `id_user`='" . User::$user['id'] . "' AND `user_id`='" . $id . "' OR `id_user`='" . $id . "' AND `user_id`='" . User::$user['id'] . "'")->fetchColumn() > 0) {
            Functions::redirect('/profile');
        }
        Cms::header(Cms::lang('my_friends_add %s', [Functions::esc($row['login'])]));
        $this->model->friends_add($id);
        Cms::footer();
    }

    function friends_del($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id'] || DB::run("SELECT COUNT(*) FROM `friends` WHERE `id_user`='" . User::$user['id'] . "' AND `user_id`='" . $id . "' OR `id_user`='" . $id . "' AND `user_id`='" . User::$user['id'] . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        Cms::header(Cms::lang('my_friends_del %s', [Functions::esc($row['login'])]));
        $this->model->friends_del($id);
        Cms::footer();
    }

    function friends_yes($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id'] || DB::run("SELECT COUNT(*) FROM `friends` WHERE `user_id`='" . User::$user['id'] . "' AND `status`='0'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        Cms::header(Cms::lang('my_friends_yes'));
        $this->model->friends_yes($id);
        Cms::footer();
    }

    function blacklist() {
        Cms::header(Cms::lang('my_blacklist'));
        $this->model->blacklist();
        Cms::footer();
    }

    function blacklist_add($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id'] || DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . User::$user['id'] . "' AND `user_id`='" . $row['id'] . "'")->fetchColumn() > 0) {
            Functions::redirect('/profile');
        }
        $this->model->blacklist_add($id);
    }

    function blacklist_del($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id'] == User::$user['id'] || DB::run("SELECT COUNT(*) FROM `blacklist` WHERE `id_user`='" . User::$user['id'] . "' AND `user_id`='" . $row['id'] . "'")->fetchColumn() == 0) {
            Functions::redirect('/profile');
        }
        $this->model->blacklist_del($id);
    }

}
