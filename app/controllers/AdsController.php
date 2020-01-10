<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdsController.php                   #
##############################################

class AdsController {

    function __construct() {
        $this->model = new AdsModel();
    }

    function index($id) {
        if (DB::run("SELECT COUNT(*) FROM `ads` WHERE `id`='" . $id . "'")->fetchColumn() == 0) {
            Functions::redirect('/');
        }

        $row = DB::run("SELECT * FROM `ads` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        $this->model->view($id);
    }

}
