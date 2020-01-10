<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminSetting.php                    #
##############################################
class AdminSetting
  {
    function __construct()
      {
        $this->model = new AdminSettingModel();
        if (User::$user['level'] < 100)
            Functions::redirect(Cms::setup('home'));
      }
    function index()
      {
        Cms::header_admin(Cms::lang('general_settings'), Cms::lang('general_settings_desc'));
        $this->model->index();
        Cms::footer_admin();
      }
    function smiles()
      {
        Cms::header_admin(Cms::lang('smiles'), Cms::lang('smiles_desc'));
        $this->model->smiles();
        Cms::footer_admin();
      }
    function smiles_update()
      {
        $this->model->smiles_update();
      }
    function smiles_del($id) // Available in Next Version
      {
        Cms::header_admin(Cms::lang('smiles'));
        $this->model->smiles_del($id);
        Cms::footer_admin();
      }
  }
