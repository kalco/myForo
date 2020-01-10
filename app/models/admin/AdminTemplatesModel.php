<?php

class AdminTemplatesModel {

    function index() {

        if ($_POST['ok']) {

            $do_file = false;
            if ($_FILES['file']['size'] > 0) {
                $do_file = true;
                $ifname = strtolower($_FILES['file']['name']);
                $type = pathinfo($ifname, PATHINFO_EXTENSION);
                $fname = Functions::name_replace(Functions::truncate($ifname, 500)) . '.' . $type;
            }
            if ($do_file) {
                $al_ext = array(
                    'zip'
                );
                $ext = explode(".", $fname);
                if (count($ext) != 2) {
                    $error .= Cms::lang('error_forbidden_format');
                }
                if (!in_array($ext[1], $al_ext)) {
                    $error .= Cms::lang('error_format_invalid');
                }
            }

            if (!isset($error)) {
                if ((move_uploaded_file($_FILES['file']['tmp_name'], HOME . '/style/' . $fname)) == true) {

                    $archive = new PclZip(HOME . '/style/' . $fname);
                    $v_list = $archive->extract(PCLZIP_OPT_PATH, HOME . '/style/');
                    if ($v_list == 0) {
                        $error .= $archive->errorInfo(true);
                    }
                    unlink(HOME . '/style/' . $fname);
                }

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_editor_up %s', [$fname]));
                }
                Functions::redirect(Cms::setup('adminpanel') . '/templates');
            }
        }

        $dir = opendir(HOME . '/style/frontend/');
        while ($skin = readdir($dir)) {
            if (($skin != '.') && ($skin != '..') && ($skin != '.svn') && ($skin != 'admin')) {
                $arrayrowskin[] = $skin;
            }
        }
        closedir($dir);

        SmartySingleton::instance()->assign(array(
            'error' => $error,
            'arrayrowskin' => $arrayrowskin
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/index.tpl');
    }

    function del($temp) {
        if ($_POST['ok']) {
            Cms::DelDir(HOME . '/style/frontend/' . $temp);
            if (Cms::setup('adminlogs') == 1) {
                Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_editor_del %s', [$temp]));
            }
            Functions::redirect(Cms::setup('adminpanel') . '/templates');
        }

        if ($_POST['close']) {
            redirect(Cms::setup('adminpanel') . '/templates');
        }

        SmartySingleton::instance()->assign(array(
            'temp' => $temp
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/del.tpl');
    }

    function view($temp) {

        if ($handle = opendir(HOME . '/style/frontend/' . $temp . '/assets/css')) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != "..") {
                    if (substr($file, strlen($file) - 4) == ".css") {
                        $arrayrowcss[] = $file;
                    }
                }
            }
            closedir($handle);
        }

        SmartySingleton::instance()->assign(array(
            'dirview' => $temp,
            'arrayrowcss' => $arrayrowcss
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/view.tpl');
    }

    function edit($temp) {
        $f = $_REQUEST['template'];

        if (file_get_contents(Cms::Input(HOME . '/style/frontend/' . $f))) {
            if (isset($_POST['ok'])) {
                chmod(HOME . '/style/frontend/' . $f, 0666);
                $fps = fopen(HOME . '/style/frontend/' . $f, 'w+'); 
                $fp = gzwrite($fps, $_POST['text']);
                fclose($fp);
                chmod(HOME . '/style/frontend/' . $f, 0644);

                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_editor_edit %s', [$f]));
                }

                Functions::redirect(Cms::setup('adminpanel') . '/templates/edit?template=' . $f);
            }
        } else {
            $error = Cms::lang('error_not_found');
        }

        SmartySingleton::instance()->assign(array(
            'error' => $error,
            'skin' => explode('/', $f),
            'css_style' => count(explode('css', $f)),
            'dirview' => $f,
            'dir' => explode('/', Cms::Input($_SERVER['REQUEST_URI'])),
            'template' => file_get_contents(HOME . '/style/frontend/' . $f),
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/edit.tpl');
    }

    function email($temp) {

        if ($temp) {

            $f = explode('edit', Cms::Input($_SERVER['REQUEST_URI']));

            if (isset($_POST['ok'])) {
                chmod(HOME . '/style/frontend/' . $f[1], 0666);
                $fps = fopen(HOME . '/style/frontend/' . $f[1], 'w+'); 
                $fp = gzwrite($fps, $_POST['text']); 
                fclose($fp); 
                chmod(HOME . '/style/frontend/' . $f[1], 0644);
                if (Cms::setup('adminlogs') == 1) {
                    Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_editor_edit_email %s', [$f[1]]));
                } 
                Functions::redirect(Cms::setup('adminpanel') . '/templates/email');
            }
            SmartySingleton::instance()->assign(array(
                'template' => file_get_contents(HOME . '/style/frontend/' . $f[1]),
                'email' => $f[1]
            ));
            SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/email_edit.tpl');
        } else {
            if ($handle = opendir(HOME . '/style/frontend/' . Cms::setup('skin') . '/templates/mail')) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        if (substr($file, strlen($file) - 4) == ".tpl") {
                            $arrayrowtemplate[] = $file;
                        }
                    }
                }
                closedir($handle);
            }

            SmartySingleton::instance()->assign(array(
                'arrayrowtemplate' => $arrayrowtemplate
            ));
            SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/templates/email.tpl');
        }
    }

}
