<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminLogs.php                       #
##############################################
class AdminLogs
{
    function __construct()
    {
        $this->model = new AdminLogsModel();
        if (User::$user['level'] < 100) {
            Functions::redirect(Cms::setup('home'));
        }
    }
    function index()
    {
        Cms::header_admin(Cms::lang('admin_log'), Cms::lang('admin_log_desc'));
        $this->model->index();
        Cms::footer_admin();
    }
    function clear()
    {
        $this->model->clear();
    }
    function notice()
    {
        Cms::header_admin(Cms::lang('notifications'), Cms::lang('notifications_desc'));
        $this->model->notice();
        Cms::footer_admin();
    }
}
