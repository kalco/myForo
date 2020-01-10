<?php
class AdminForumModel extends Base
  {
    function index()
      {
        $count = DB::run("SELECT COUNT(*) FROM `category`")->fetchColumn();
        if ($count > 0)
          {
            $req = DB::run("SELECT `category`.*, (SELECT COUNT(*) FROM `tema` WHERE `tema`.`id_razdel` = category.`id` ) AS `count` FROM `category` ORDER BY `realid` ASC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC))
              {
                $arrayrow[] = $row;
              }
          }
        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/forums/index.tpl');
      }
    function forum_add()
      {
        if ($_POST['ok'])
          {
            if (mb_strlen(Cms::Input($_POST['name'])) < 2 || mb_strlen(Cms::Input($_POST['name'])) > 250)
              {
                $error .= 'Недопустимая длина названия категории!<br/>';
              }
            if (DB::run("SELECT COUNT(*) FROM `category` WHERE `name`='" . Cms::Input($_POST['name']) . "'")->fetchColumn() > 0)
              {
                $error .= 'Категория с таким названием уже существует!<br/>';
              }
            if (!isset($error))
              {
                DB::run("INSERT INTO `category` SET 
                        `name`='" . Cms::Input($_POST['name']) . "', 
                            `translate` = '" . Functions::name_replace(Cms::Input($_POST['name'])) . "', 
                                   `keywords`='" . Cms::Input($_POST['keywords']) . "',
                                       `description`='" . Cms::Input($_POST['description']) . "',
                                            `type`='" . Cms::Input($_POST['type']) . "'");
                $fid = DB::lastInsertId();
                DB::run("UPDATE `category` SET `realid`='" . $fid . "' WHERE `id`='" . $fid . "'");
                if (Cms::setup('adminlogs') == 1)
                  {
                  	Cms::adminlogs(Cms::lang('module_forum'), Cms::lang('module_forum_add %s', [Cms::Input($_POST['name'])]));
                  }
               
              }
              
          }
           Functions::redirect(Cms::setup('adminpanel') . '/forums');
        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
      }
    function forum_edit($id)
      {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
        if ($_POST['ok'])
          {
            if (mb_strlen(Cms::Input($_POST['name'])) < 2 || mb_strlen(Cms::Input($_POST['name'])) > 250)
              {
                $error = 'Недопустимая длина названия категории!';
              }
            if (!isset($error))
              {
                DB::run("UPDATE `category` SET 
                        `name`='" . Cms::Input($_POST['name']) . "', 
                            `translate` = '" . Functions::name_replace(Cms::Input($_POST['name'])) . "', 
                                `keywords`='" . Cms::Input($_POST['keywords']) . "', 
                                   `description`='" . Cms::Input($_POST['description']) . "',
                                        `type`='" . Cms::Input($_POST['type']) . "' WHERE `id`='" . $row['id'] . "'");
                if (Cms::setup('adminlogs') == 1)
                  {
                  	 Cms::adminlogs(Cms::lang('module_forum'), Cms::lang('module_forum_edit %s', [Cms::Input($_POST['name'])]));
                  } //пишем лог админа, если включено
                Functions::redirect(Cms::setup('adminpanel') . '/forums');
              }
          }
        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/forums/edit_forum.tpl');
      }
    function forum_del($id)
      {
        $row = DB::run("SELECT * FROM `category` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);
            DB::run("DELETE FROM `category` WHERE `id` = '" . $row['id'] . "' LIMIT 1");
            DB::run("DELETE FROM `tema` WHERE `id_razdel` = '" . $row['id'] . "'");
            DB::run("OPTIMIZE TABLE `category`");
            DB::run("OPTIMIZE TABLE `tema`");
            if (Cms::setup('adminlogs') == 1) {
                 Cms::adminlogs(Cms::lang('module_forum'), Cms::lang('module_forum_del %s', [Functions::esc($row['name'])]));
            }
           Functions::redirect(Cms::setup('adminpanel') . '/forums');
      }
  
    function down($id)
      {
        $req = DB::run("SELECT * FROM `category` WHERE `id` = '" . abs(intval($id)) . "' LIMIT 1");
        if ($req)
          {
            $res1 = $req->fetch(PDO::FETCH_ASSOC);
            $sort = $res1['realid'];
            $req  = DB::run("SELECT * FROM `category` WHERE `realid` > '" . abs(intval($sort)) . "' ORDER BY `realid` ASC LIMIT 1");
            if ($req)
              {
                $res   = $req->fetch(PDO::FETCH_ASSOC);
                $id2   = $res['id'];
                $sort2 = $res['realid'];
                DB::run("UPDATE `category` SET `realid` = '" . abs(intval($sort2)) . "' WHERE `id` = '" . abs(intval($id)) . "'");
                DB::run("UPDATE `category` SET `realid` = '" . abs(intval($sort)) . "' WHERE `id` = '" . abs(intval($id2)) . "'");
              }
          }
        Functions::redirect(Recipe::getReferer());
      }
    function up($id)
      {
        $req = DB::run("SELECT * FROM `category` WHERE `id` = '" . abs(intval($id)) . "' LIMIT 1");
        if ($req)
          {
            $res1 = $req->fetch(PDO::FETCH_ASSOC);
            $sort = $res1['realid'];
            $req  = DB::run("SELECT * FROM `category` WHERE `realid` < '" . abs(intval($sort)) . "' ORDER BY `realid` DESC LIMIT 1");
            if ($req)
              {
                $res   = $req->fetch(PDO::FETCH_ASSOC);
                $id2   = $res['id'];
                $sort2 = $res['realid'];
                DB::run("UPDATE `category` SET `realid` = '" . abs(intval($sort2)) . "' WHERE `id` = '" . abs(intval($id)) . "'");
                DB::run("UPDATE `category` SET `realid` = '" . abs(intval($sort)) . "' WHERE `id` = '" . abs(intval($id2)) . "'");
              }
          }
        Functions::redirect(Recipe::getReferer());
      }
  }