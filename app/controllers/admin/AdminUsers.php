<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminUsers.php                      #
##############################################
class AdminUsers
  {
    function __construct()
      {
        $this->model = new AdminUsersModel();
        if (User::$user['level'] < 100)
          {
            Functions::redirect(Cms::setup('home'));
          }
      }
    function index($page)
      {
        Cms::header_admin(Cms::lang('users'), Cms::lang('users_list'));
        $this->model->index($page);
        Cms::footer_admin();
      }
    function add()
      {
        $this->model->add();
      }
    function edit($id)
      {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0)
          {
            Functions::redirect(Cms::setup('adminpanel'));
          }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header_admin(Cms::lang('edit_user %s' , [$row['login']]));
        $this->model->edit($id);
        Cms::footer_admin();
      }
    function del($id)
      {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "' AND `id` > '1' ")->fetchColumn() == 0)
          {
            Functions::redirect(Cms::setup('adminpanel'));
          }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header_admin(Cms::lang('del_user %s' , [$row['login']]));
        $this->model->del($id);
        Cms::footer_admin();
      }
    function ban($id)
      {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "' AND `id` > '1' ")->fetchColumn() == 0)
          {
            Functions::redirect(Cms::setup('adminpanel'). '/users');
          }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header_admin(Cms::lang('user_ban %s' , [$row['login']]));
        $this->model->ban($id);
        Cms::footer_admin();
      }
    function unban($id)
      {
        if (DB::run("SELECT COUNT(*) FROM `users` WHERE `id`='" . $id . "'")->fetchColumn() == 0)
          {
            Functions::redirect(Cms::setup('adminpanel'));
          }
        $row = DB::run("SELECT * FROM `users` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        Cms::header_admin(Cms::lang('lift_ban %s' , [$row['login']]));
        $this->model->unban($id);
        Cms::footer_admin();
      }
  }
