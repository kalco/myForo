<?php

class AdminAdsModel extends Base {

    function index() {
        //список
        $count = DB::run("SELECT COUNT(*) FROM `ads`")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT `ads`.*, (SELECT COUNT(1) FROM `ads_stat` WHERE `ads_stat`.`id_link`=`ads`.`id`) AS `counts` FROM `ads` ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $row;
            }
        }

        SmartySingleton::instance()->assign(array(
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/ads?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/ads/index.tpl');
    }

    function add() {
        if ($_POST['ok']) {

            $time = Cms::realtime() + $_POST['ch'] * $_POST['mn'] * 60 * 60 * 24;

            if (empty($_POST['link'])) {
                $error .= Cms::lang('error_invalid_url');
            }
            
             $do_filephoto = false;
            // Проверка загрузки с обычного браузера
            if ($_FILES['file']['size'] > 0) {
                $do_filephoto = true;
                $ifname = strtolower($_FILES['file']['name']);
                $type = pathinfo($ifname, PATHINFO_EXTENSION);
                $fnamephoto = Functions::passgen(25) . '.' . $type;
                $fsize = $_FILES['file']['size'];
            }

            if ($do_filephoto) {
                $al_ext = array(
                    'jpg',
                    'jpeg',
                    'gif',
                    'png'
                );
                $ext = explode(".", $fnamephoto);
                if (count($ext) != 2) {
                    $error .= 'Запрещенный формат картинки!<br/>';
                }
                if (!in_array($ext[1], $al_ext)) {
                    $error .= 'Не допустимый формат картинки!<br/>';
                }
                if ($fsize >= Cms::setup('filesize_forum') * 1024 * 1024) {
                    $error .= 'Недопустимый вес файла! Максимум ' . Cms::setup('filesize_forum') . ' Mb!<br/>';
                }

                $img = getimagesize($_FILES["file"]["tmp_name"]);
                if ($img[0] < Cms::setup('ads_size')) {
                    $error .= 'Ваша фотография слишком маленькая! Минимальный допустимый размер для загрузки составляет 250 пикселей по ширине!<br/>';
                }
            }

  
            
            if (!isset($error)) {
                 if ((move_uploaded_file($_FILES["file"]["tmp_name"], HOME . '/files/banners/' . $fnamephoto)) == true) {
                    $img = new SimpleImage();
                    $img->load(HOME . '/files/banners/' . $fnamephoto)->resize(850, 80)->save(HOME . '/files/banners/' . $fnamephoto);
                    $img->load(HOME . '/files/banners/' . $fnamephoto)->resize(250, 300)->save(HOME . '/files/banners/view-' . $fnamephoto);
                DB::run("INSERT INTO `ads` SET 
                    `link`='" . Cms::Input($_POST['link']) . "', 
                     `id_user`='" . $this->user['id'] . "',
                        `name`='" . Cms::Input($_POST['name']) . "', 
                            `photo`='" . $fnamephoto . "',
                                `type`='" . Cms::Input($_POST['type']) . "', 
                                    `target`='" . Cms::Input($_POST['target']) . "', 
                                        `count`='" . Cms::Input($_POST['count']) . "', 
                                           `time`='" . $time . "'");
 }
                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_ads'), Cms::lang('module_ads_add %s', [Cms::Input($_POST['link'])]));
                }
                
            }
          
        }
  Functions::redirect(Cms::setup('adminpanel') . '/ads');
        SmartySingleton::instance()->assign(array(
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/ads/index.tpl');
    }

    function edit($id) {
        $row = DB::run("SELECT * FROM `ads` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        if ($_POST['ok']) {

            if ($row['time'] > Cms::realtime()) {
                $time = $row['time'] + $_POST['ch'] * $_POST['mn'] * 60 * 60 * 24;
            } else {
                $time = Cms::realtime() + $_POST['ch'] * $_POST['mn'] * 60 * 60 * 24;
            }

            if (empty($_POST['link'])) {
                $error .= Cms::lang('error_invalid_url');
            }

 $do_filephoto = false;
            if ($_FILES['file']['size'] > 0) {
                $do_filephoto = true;
                $ifname = strtolower($_FILES['file']['name']);
                $type = pathinfo($ifname, PATHINFO_EXTENSION);
                $fnamephoto = Functions::passgen(25) . '.' . $type;
                $fsize = $_FILES['file']['size'];
            }

            if ($do_filephoto) {
                $al_ext = array(
                    'jpg',
                    'jpeg',
                    'gif',
                    'png'
                );
                $ext = explode(".", $fnamephoto);
                if (count($ext) != 2) {
                    $error .= 'Запрещенный формат картинки!<br/>';
                }
                if (!in_array($ext[1], $al_ext)) {
                    $error .= 'Не допустимый формат картинки!<br/>';
                }
                if ($fsize >= Cms::setup('filesize_forum') * 1024 * 1024) {
                    $error .= 'Недопустимый вес файла! Максимум ' . Cms::setup('filesize_forum') . ' Mb!<br/>';
                }

                $img = getimagesize($_FILES["file"]["tmp_name"]);
                if ($img[0] < Cms::setup('ads_size')) {
                    $error .= 'Ваша фотография слишком маленькая! Минимальный допустимый размер для загрузки составляет 250 пикселей по ширине!<br/>';
                }
            }
            if (!isset($error)) {
                DB::run("UPDATE `ads` SET 
                    `link`='" . Cms::Input($_POST['link']) . "', 
                        `name`='" . Cms::Input($_POST['name']) . "', 
                                `type`='" . Cms::Input($_POST['type']) . "', 
                                    `target`='" . Cms::Input($_POST['target']) . "', 
                                        `count`='" . Cms::Input($_POST['count']) . "', `time`='" . $time . "' WHERE `id`='" . $row['id'] . "'");
                    if ((move_uploaded_file($_FILES["file"]["tmp_name"], HOME . '/files/banners/'. $fnamephoto)) == true) {
                    Cms::DelFile(HOME . '/files/banners/' . $row['photo']);
                    Cms::DelFile(HOME . '/files/banners/view-' . $row['photo']);

                    $img = new SimpleImage();
                     $img->load(HOME . '/files/banners/' . $fnamephoto)->resize(850, 80)->save(HOME . '/files/banners/' . $fnamephoto);
                     $img->load(HOME . '/files/banners/' . $fnamephoto)->resize(250, 300)->save(HOME . '/files/banners/view-' . $fnamephoto);

                    DB::run("UPDATE `ads` SET `photo` = '" . $fnamephoto . "'  WHERE `id`= '" . $row['id'] . "'");
                }

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_ads'), Cms::lang('module_ads_edit %s', [Cms::Input($_POST['link'])]));
                }
                Functions::redirect(Cms::setup('adminpanel') . '/ads');
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'error' => $error
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/ads/edit.tpl');
    }

    function del($id) {
        $row = DB::run("SELECT * FROM `ads` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

            Cms::DelFile('files/banners/' . $row['photo']);
            Cms::DelFile('files/banners/view-' . $row['photo']);
            DB::run("DELETE FROM `ads` WHERE `id` = '" . $row['id'] . "' LIMIT 1");
            DB::run("DELETE FROM `ads_stat` WHERE `id_link` = '" . $row['id'] . "'");
            DB::run("OPTIMIZE TABLE `ads`");
            DB::run("OPTIMIZE TABLE `ads_stat`");

            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs(Cms::lang('module_ads'), Cms::lang('module_ads_del %s', [Functions::esc($row['link'])]));
            }
            Functions::redirect(Cms::setup('adminpanel') . '/ads');
    }

    function stat($id) {
        $row = DB::run("SELECT * FROM `ads` WHERE `id`='" . $id . "'")->fetch(PDO::FETCH_ASSOC);

        $count = DB::run("SELECT COUNT(*) FROM `ads_stat` WHERE `id_link`=" . $row['id'] . "")->fetchColumn();
        if ($count > 0) {
            $req = DB::run("SELECT * FROM `ads_stat` WHERE `id_link`=" . $row['id'] . " ORDER BY `id` DESC LIMIT " . $this->page . ", " . $this->message);
            while ($rows = $req->fetch(PDO::FETCH_ASSOC)) {
                $arrayrow[] = $rows;
            }
        }

        SmartySingleton::instance()->assign(array(
            'row' => $row,
            'count' => $count,
            'arrayrow' => $arrayrow,
            'pagenav' => Functions::pagination(Cms::setup('adminpanel') . '/ads/' . $row['id'] . '?', $this->page, $count, $this->message)
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/ads/stat.tpl');
    }

}
