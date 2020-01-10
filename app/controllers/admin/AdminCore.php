<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminCore.php                       #
##############################################
class AdminCore
  {
    function __construct()
      {
        $this->model = new AdminCoreModel();
        if (User::$user['level'] < 100)
          {
            Functions::redirect(Cms::setup('home'));
          }
      }
    function index()
      {
        Cms::header_admin(Cms::lang('adminpanel'), Cms::lang('welcome %s',  [Cms::setup('namesite')]));
        $this->model->index();
        Cms::footer_admin();
      }
  }