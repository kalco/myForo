<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: MainController.php                  #
##############################################
class MainController {

    function __construct() {
        $this->model = new MainModel();
    }

function index() {
        Cms::header(Cms::lang('home_page'));
        $this->model->index();
        Cms::footer();
    }
    function forum($id) {
        if (DB::run("SELECT COUNT(*) FROM `category` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }

        $rows = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($rows['type'] == 1 && empty(User::$user['id'])) {
            Functions::redirect(Cms::setup('home'));
        }

        if ($rows['type'] == 2 && User::$user['level'] < 10) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Functions::esc($rows['name']));
        $this->model->forum($id);
        Cms::footer();
    }

    function add() {
        if (User::$user['id'] == null) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('create_new_thread'));
        $this->model->add();
        Cms::footer();
    }

    function theme($id) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $rows = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Functions::esc($rows['name']));
        $this->model->theme($id);
        Cms::footer();
    }

    function load($id, $id2, $id3, $id4) {
        if (DB::run("SELECT COUNT(*) FROM `post_files` WHERE `id`='" . $id4 . "' AND `id_razdel`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->load($id, $id2, $id3, $id4);
    }

    function add_thread() {
         if (User::$user['id'] == null) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('create_new_thread'));
        $this->model->add_thread();
        Cms::footer();
    }

    function setup($id) {
        if (User::$user['level'] < 100) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `forum` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `forum` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('forum_options %s', [Functions::esc($row['name'])]));
        $this->model->setup($id);
        Cms::footer();
    }

    function setup_del($id) {
        if (User::$user['level'] < 100) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `forum` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `forum` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('forum_del %s', [Functions::esc($row['name'])]));
        $this->model->setup_del($id);
        Cms::footer();
    }

    function closed($id) {
        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->closed($id);
    }

    function open($id) {
        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->open($id);
    }

    function tema_up($id) {
        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->tema_up($id);
    }

    function tema_down($id) {
        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $this->model->tema_down($id);
    }

    function tema_setup($id) {
        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('thread_options %s', [Functions::esc($row['name'])]));
        $this->model->tema_setup($id);
        Cms::footer();
    }

    function tema_del($id) {

        if (User::$user['level'] <  50) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('thread_del %s', [Functions::esc($row['name'])]));
        $this->model->tema_del($id);
        Cms::footer();
    }

    function post_setup($id) {
        if (DB::run("SELECT COUNT(*) FROM `post` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `post` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if (User::$user['level'] < 50 && User::$user['id'] != $row['id_user'] || User::$user['level'] < 50 && $row['time'] < intval(Cms::realtime() - Cms::setup('forum_time_edit_post') * 60)) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('edit_post'));
        $this->model->post_setup($id);
        Cms::footer();
    }

    function post_del($id) {
       if (DB::run("SELECT COUNT(*) FROM `post` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
       }
    	 $row = DB::run("SELECT * FROM `post` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
    	 
        if (User::$user['level'] <  50 && User::$user['id'] != $row['id_user'] || User::$user['level'] <  50 && $row['time'] < intval(Cms::realtime() - Cms::setup('forum_time_edit_post') * 60) || $row['realid'] > 0){
            Functions::redirect(Cms::setup('home'));
        }
       
        Cms::header(Cms::lang('del_post'));
        $this->model->post_del($id);
        Cms::footer();
    }

    function post_reply($id, $id2, $id3) {
        if (User::$user['id'] == null) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `category` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id2 . "' AND `closed`='0'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `post` WHERE `id`='" . $id3 . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `post` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id_user'] == User::$user['id']) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('post_reply'));
        $this->model->post_reply($id, $id2, $id3);
        Cms::footer();
    }

    function post_quote($id, $id2, $id3) {
        if (User::$user['id'] == null) {
            Functions::redirect(Cms::setup('home'));
        }

        if (DB::run("SELECT COUNT(*) FROM `category` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id2 . "' AND `closed`='0'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        if (DB::run("SELECT COUNT(*) FROM `post` WHERE `id`='" . $id3 . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `post` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        if ($row['id_user'] == User::$user['id']) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('post_quote'));
        $this->model->post_quote($id, $id2, $id3);
        Cms::footer();
    }

    function post($id) {
        if (DB::run("SELECT COUNT(*) FROM `post` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('see_post'));
        $this->model->post($id);
        Cms::footer();
    }

    function new_thems() {
        Cms::header(Cms::lang('new_threads'));
        $this->model->new_thems();
        Cms::footer();
    }

    function new_posts() {
        Cms::header(Cms::lang('new_posts'));
        $this->model->new_posts();
        Cms::footer();
    }

    function search($search) {
        Cms::header(Cms::lang('search'));
        $this->model->search($search);
        Cms::footer();
    }

    function files($id, $id2, $id3) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id2 . "' AND `id_razdel`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $rows = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('thread_files %s', [Functions::esc($rows['name'])]));
        $this->model->files($id, $id2, $id3);
        Cms::footer();
    }

    function vote($id, $id2) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id2 . "' AND `id_razdel`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id2 . "'")->fetch(PDO::FETCH_ASSOC);
        if (User::$user['level'] <  50 && User::$user['id'] != $row['id_user']) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('thred_vote %s', [Functions::esc($row['name'])]));
        $this->model->vote($id, $id2);
        Cms::footer();
    }

    function vote_edit($id, $id2, $id3) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id3 . "' AND `id_razdel`='" . $id . "' AND `id_forum`='" . $id2 . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        if (User::$user['level'] <  50 && User::$user['id'] != $row['id_user']) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('thred_vote_edit %s', [Functions::esc($row['name'])]));
        $this->model->vote_edit($id, $id2, $id3);
        Cms::footer();
    }

    function vote_del($id, $id2, $id3) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id3 . "' AND `id_razdel`='" . $id . "' AND `id_forum`='" . $id2 . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        if (User::$user['level'] <  50 && User::$user['id'] != $row['id_user']) {
            Functions::redirect(Cms::setup('home'));
        }
        Cms::header(Cms::lang('thred_vote_del %s', [Functions::esc($row['name'])]));
        $this->model->vote_del($id, $id2, $id3);
        Cms::footer();
    }

    function vote_all($id, $id2, $id3) {
        if (DB::run("SELECT COUNT(*) FROM `tema` WHERE `id`='" . $id3 . "' AND `id_razdel`='" . $id . "' AND `id_forum`='" . $id2 . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `tema` WHERE `id`='" . $id3 . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('thred_vote_list %s', [Functions::esc($row['name'])]));
        $this->model->vote_all($id, $id2, $id3);
        Cms::footer();
    }

    function captcha() {
        $this->model->captcha();
    }

    function bbcode_ajax() {
        $this->model->bbcode_ajax();
    }

    function smiles() {
        Cms::header(Cms::lang('all_smiles'));
        $this->model->smiles();
        Cms::footer();
    }

    function bbcode() {
        Cms::header(Cms::lang('bb_code'));
        $this->model->bbcode();
        Cms::footer();
    }

    function error404() {
        Cms::header_404(Cms::lang('404_page_not_found'));
        $this->model->error404();
    }

}

