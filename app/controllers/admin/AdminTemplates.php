<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminTemplates.php                  #
##############################################
class AdminTemplates
  {
    function __construct()
      {
        $this->model = new AdminTemplatesModel();
        if (User::$user['level'] < 100)
            Functions::redirect(Cms::setup('home'));
      }
    function index()
      {
        Cms::header_admin(Cms::lang('template_manage'), Cms::lang('template_manage_desc'));
        $this->model->index();
        Cms::footer_admin();
      }
    function del($temp)
      {
        Cms::header_admin(Cms::lang('template_manage'));
        $this->model->del($temp);
        Cms::footer_admin();
      }
    function view($temp)
      {
        Cms::header_admin(Cms::lang('template_manage'));
        $this->model->view($temp);
        Cms::footer_admin();
      }
    function edit($temp)
      {
        Cms::header_admin(Cms::lang('template_manage'));
        $this->model->edit($temp);
        Cms::footer_admin();
      }
    function email($temp)
      {
        Cms::header_admin(Cms::lang('template_email_manage'), Cms::lang('template_email_manage_desc'));
        $this->model->email($temp);
        Cms::footer_admin();
      }
  }
