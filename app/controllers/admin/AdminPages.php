<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminPages.php                      #
##############################################

class AdminPages {

    function __construct() {
        $this->model = new AdminPagesModel();
        if (User::$user['level'] < 100)
            Functions::redirect(Cms::setup('home'));
    }

    function index($page) {
        Cms::header_admin(Cms::lang('pages'), Cms::lang('pages_desc'));
        $this->model->index($page);
        Cms::footer_admin();
    }

    function add() {
        $this->model->add();
    }

    function edit($id) {
        Cms::header_admin(Cms::lang('pages_edit'), Cms::lang('pages_desc'));
        $this->model->edit($id);
        Cms::footer_admin();
    }

    function del($id) {
        $this->model->del($id);
    }

}
