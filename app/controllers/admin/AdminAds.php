<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminAds.php                        #
##############################################
class AdminAds
  {
    function __construct()
      {
        $this->model = new AdminAdsModel();
        if (User::$user['level'] < 100)
          {
            Functions::redirect(Cms::setup('home'));
          }
      }
    function index()
      {
        Cms::header_admin(Cms::lang('ads_manage'), Cms::lang('ads_manage_desc'));
        $this->model->index();
        Cms::footer_admin();
      }
    function add()
      {
        $this->model->add();
      }
    function edit($id)
      {
        Cms::header_admin(Cms::lang('ads_manage'));
        $this->model->edit($id);
        Cms::footer_admin();
      }
    function del($id)
      {
        $this->model->del($id);
      }
    function stat($id)
      {
        Cms::header_admin(Cms::lang('statistics'));
        $this->model->stat($id);
        Cms::footer_admin();
      }
  }
