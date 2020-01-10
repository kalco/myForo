<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: UserController.php                  #
##############################################
class UserController {

    function __construct() {
        $this->model = new UserModel();
    }

    function index($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Functions::esc($row['login']));
        $this->model->index($id);
        Cms::footer();
    }

    function login() {
        Cms::header(Cms::lang('login'));
        $this->model->login();
        Cms::footer();
    }

    function signup() {
        Cms::header(Cms::lang('registration'));
        $this->model->signup();
        Cms::footer();
    }

    function lostpass($id, $code) {
        Cms::header(Cms::lang('lostpass'));
        $this->model->lostpass($id, $code);
        Cms::footer();
    }

    function activation($id, $code) {
        Cms::header(Cms::lang('activation'));
        $this->model->activation($id, $code);
        Cms::footer();
    }

    function users() {
        Cms::header(Cms::lang('all_users'));
        $this->model->users();
        Cms::footer();
    }
    
    function users_admin() {
        Cms::header(Cms::lang('staff'));
        $this->model->users_admin();
        Cms::footer();
    }
    
        function online() {
        Cms::header(Cms::lang('online_users'));
        $this->model->online();
        Cms::footer();
    }

    function guest() {
        Cms::header(Cms::lang('online_guests'));
        $this->model->guest();
        Cms::footer();
    }

    function ban() {
        if (User::$user['ban'] == 0 || User::$user['bantime'] < Cms::realtime()) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('you_banned'));
        $this->model->ban();
        Cms::footer();
    }

    function logout() {
        $this->model->logout();
    }

}
