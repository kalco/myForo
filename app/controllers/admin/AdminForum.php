<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminForum.php                      #
##############################################
class AdminForum
  {
    function __construct()
      {
        $this->model = new AdminForumModel();
        if (User::$user['level'] < 100)
          {
            Functions::redirect(Cms::setup('home'));
          }
      }
    function index()
      {
        Cms::header_admin(Cms::lang('a_forums'), Cms::lang('forums_list_all'));
        $this->model->index();
        Cms::footer_admin();
      }
    function forum_add()
      {
        $this->model->forum_add();
      }
    function forum_edit($id)
      {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header_admin(Cms::lang('edit_category %s',  [Functions::esc($row['name'])]));
        $this->model->forum_edit($id);
        Cms::footer_admin();
      }
    function forum_del($id)
      {
        $this->model->forum_del($id);
      }
    function up($id)
      {
        $this->model->up($id);
      }
    function down($id)
      {
        $this->model->down($id);
      }
  }