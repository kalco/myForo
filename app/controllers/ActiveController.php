<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: ActiveController.php                #
##############################################

class ActiveController {

    function __construct() {
        $this->model = new ActiveModel();
    }

    function thems($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('threads_by %s', [Functions::esc($row['login'])]));
        $this->model->thems($id);
        Cms::footer();
    }

    function posts($id) {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect(Cms::setup('home'));
        }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header(Cms::lang('posts_by %s', [Functions::esc($row['login'])]));
        $this->model->posts($id);
        Cms::footer();
    }

}
