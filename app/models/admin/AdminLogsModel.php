<?php
##############################################
#Framework :: RokaEngine 17.06               #
#myForo :: Powerful Community Forum          #
#E-mail :: info@xplos1ve.info                #
#Skype :: x.plosive1                         #
#File :: AdminLogsModel.php                  #
##############################################
class AdminlogsModel extends Base
{
    function index()
    {
        $count = DB::run("SELECT COUNT(*) FROM `adminlogs`")->fetchColumn();
        if ($count > 0)
        {
            $req = DB::run("SELECT `adminlogs`.*, (SELECT `login` FROM `users` WHERE `users`.`id`=`adminlogs`.`id_user`) AS `login` FROM `adminlogs` ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC))
            {
                $arrayrow[] = $row;
                $text[]     = Cms::bbcode($row['text']);
            }
        }
        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/logs?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/logs/logs.tpl');
    }
    function clear()
    {
        if ($_POST['ok'])
        {
            DB::run("TRUNCATE TABLE `adminlogs`");
            if (Cms::setup('adminlogs') == 1)
            {
                Cms::adminlogs(Cms::lang('module_logs'), Cms::lang('module_logs_clear'));
            }
        }
        Functions::redirect(Cms::setup('adminpanel') . '/logs');
    }
    function notice()
    {
        $count = DB::run("SELECT COUNT(*) FROM `notice`")->fetchColumn();
        if ($count > 0)
        {
            $req = DB::run("SELECT `notice`.*, (SELECT `login` FROM `users` WHERE `users`.`id`=`notice`.`id_user`) AS `login` FROM `notice` ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC))
            {
                $arrayrow[] = $row;
                $text[]     = Cms::bbcode($row['text']);
            }
        }
        SmartySingleton::instance()->assign(array(
            'text' => $text,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/notice?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/logs/notice.tpl');
    }
}
