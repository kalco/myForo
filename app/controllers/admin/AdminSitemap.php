<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminSitemap.php                    #
##############################################
class AdminSitemap
  {
    function __construct()
      {
        $this->model = new AdminSitemapModel();
        if (User::$user['level'] < 100)
          {
            Functions::redirect(Cms::setup('home'));
          }
      }
    function index()
      {
        Cms::header_admin(Cms::lang('sitemap_manage'), Cms::lang('sitemap_manage_desc'));
        $this->model->index();
        Cms::footer_admin();
      }
    function generate()
      {
        $this->model->generate();
      }
    function del($temp)
      {
        $this->model->del($temp);
      }
    function edit($temp)
      {
        Cms::header_admin(Cms::lang('sitemap_manage'));
        $this->model->edit($temp);
        Cms::footer_admin();
      }
    function config()
      {
        $this->model->config();
      }
  }
