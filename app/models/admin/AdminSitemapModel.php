<?php

class AdminSitemapModel {

    function index() {

        $dir = opendir('./sitemap');
        while ($row = readdir($dir)) {
            if (($row != '.') && ($row != '..') && ($row != '.svn') && ($row != 'index.xml')) {
                $arrayrow[] = $row;
            }
        }
        
        closedir($dir);

         if (file_get_contents(HOME . '/robots.txt')) {
            if (isset($_POST['ok'])) {
                chmod(HOME . '/robots.txt', 0666);
                $fps = fopen(HOME . '/robots.txt', 'w+');
                $fp = gzwrite($fps, $_POST['text']);
                fclose($fp); //Закрытие файла
                chmod(HOME . '/robots.txt', 0644);

                if (Cms::setup('adminlogs') == 1)
                    Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_sitemap_robots'));

                Functions::redirect(Cms::setup('adminpanel') . '/sitemap');
            }
        } else {
            $error = Cms::lang('error_not_found');
        }


        SmartySingleton::instance()->assign(array(
            'arrayrow' => $arrayrow,
            'error' => $error,
            'template' => file_get_contents(HOME . '/robots.txt'),
           
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/sitemap/index.tpl');
    }

    function generate() {
    	
        set_time_limit(0);

        $sitemap = new Sitemap('sitemap/sitemap.xml');

        $req = DB::run("SELECT * FROM `category` WHERE `realid`='0' AND `type`='0' ORDER BY `realid` ASC");
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $url = Cms::setup('home') . '/forums/' . $row['id'] . '.' . $row['translate'];
            $sitemapTXT .= "\r\n" . $url;
            $sitemap->addItem($url, time(), Cms::setup('sitemap_changefreq'), Cms::setup('sitemap_priority'));
        }
        $req = DB::run("SELECT * FROM `tema` WHERE `type`='0' ORDER BY `id` ASC");
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $url = Cms::setup('home') . '/forums/' . $row['id_razdel'] . '/' . $row['id_forum'] . '/' . $row['id'];
            $sitemapTXT .= "\r\n" . $url;
            $sitemap->addItem($url, time(), Cms::setup('sitemap_changefreq'), Cms::setup('sitemap_priority'));
        }
        $req = DB::run("SELECT * FROM `users` ORDER BY `id` ASC");
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            $url = Cms::setup('home') . '/' . $row['id'] . '-' . $row['login'];
            $sitemapTXT .= "\r\n" . $url;
            $sitemap->addItem($url, time(), Cms::setup('sitemap_changefreq'), Cms::setup('sitemap_priority'));
        }

        if (Cms::setup('sitemap_txt') == 1) {
            $fp = fopen('sitemap/sitemap.txt', 'w+');
            if (!fwrite($fp, $sitemapTXT)) {
                echo Cms::lang('error_not_found');
            }
            fclose($fp);
        }

        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs(Cms::lang('module_sitemap'), Cms::lang('module_sitemap_gen'));
        }

        Functions::redirect(Cms::setup('adminpanel') . '/sitemap');
    }

    function del($temp) 
    {
        unlink('sitemap/' . $temp);
        
        if (Cms::setup('adminlogs') == 1) {
            Cms::adminlogs(Cms::lang('module_sitemap'), Cms::lang('module_sitemap_del %s', [$temp]));
  }
        Functions::redirect(Cms::setup('adminpanel') . '/sitemap');
    }

    function edit($temp) {

        $f = explode('edit', $_SERVER['REQUEST_URI']);

        if (file_get_contents(HOME . '/sitemap/' . $f[1])) {
            if (isset($_POST['ok'])) {
                chmod(HOME . '/sitemap/' . $f[1], 0666);
                $fps = fopen(HOME . '/sitemap/' . $f[1], 'w+'); 
                $fp = gzwrite($fps, $_POST['text']); 
                fclose($fp); //Закрытие файла
                chmod(HOME . '/sitemap/' . $f[1], 0644);

                if (Cms::setup('adminlogs') == 1)
                    Cms::adminlogs(Cms::lang('module_editor'), Cms::lang('module_sitemap_edit %s', [$f[1]])); //пишем лог админа, если включено

                Functions::redirect(Cms::setup('adminpanel') . '/sitemap');
            }
        } else {
            $error = Cms::lang('error_not_found');
        }

        SmartySingleton::instance()->assign(array(
            'error' => $error,
            'file' => $temp,
            'template' => file_get_contents(HOME . '/sitemap/' . $f[1]),
        ));
        SmartySingleton::instance()->display(SMARTY_TEMPLATE_LOAD_ADMIN . '/templates/admin/sitemap/edit.tpl');
    }
    function config() {

        if (isset($_POST['submit'])) {
            if (isset($_POST['address'])) {
                $xml = simplexml_load_file('http://maps.google.com/maps/api/geocode/xml?address=' . $_POST['address'] . '&sensor=false');
                $coordinaty[1] = $xml->result->geometry->location->lat;
                $coordinaty[0] = $xml->result->geometry->location->lng;
            }

            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['sitemap_changefreq']) . "' WHERE `name`='sitemap_changefreq'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['sitemap_priority']) . "' WHERE `name`='sitemap_priority'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['sitemap_index']) . "' WHERE `name`='sitemap_index'");
            DB::run("UPDATE `setting` SET `value` = '" . Cms::Input($_POST['sitemap_txt']) . "' WHERE `name`='sitemap_txt'");

            if (Cms::setup('adminlogs') == 1)
                Cms::adminlogs(Cms::lang('module_sitemap'), Cms::lang('module_sitemap_robots_edit'));
        }
            Functions::redirect(Cms::setup('adminpanel') . '/sitemap');
    }

}
