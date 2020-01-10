<?php

$admin = Cms::setup('adminpanel');
/* Admin Panel */
/* Adminpanel Home Page */
$router->add('admin', $admin, 'AdminCore:index');

/* Forums */
$router->add('admin_forum', $admin . '/forums', 'AdminForum:index');
$router->add('admin_forum_add', $admin . '/forums/add', 'AdminForum:forum_add', 'GET|POST');
$router->add('admin_forum_edit', $admin . '/forums/edit/(id:num)', 'AdminForum:forum_edit', 'GET|POST');
$router->add('admin_forum_del', $admin . '/forums/del/(id:num)', 'AdminForum:forum_del');
$router->add('admin_forum_up', $admin . '/forums/up/(id:num)', 'AdminForum:up');
$router->add('admin_forum_down', $admin . '/forums/down/(id:num)', 'AdminForum:down');

/* Settings */
$router->add('admin_setting', $admin . '/setting', 'AdminSetting:index', 'GET|POST');
$router->add('admin_setting_smiles', $admin . '/setting/smiles', 'AdminSetting:smiles', 'GET|POST');
$router->add('admin_setting_smiles_update', $admin . '/setting/smiles/update', 'AdminSetting:smiles_update');

/* Pages */
$router->add('admin_pages', $admin . '/pages', 'AdminPages:index');
$router->add('admin_pages_add', $admin . '/pages/add', 'AdminPages:add', 'GET|POST');
$router->add('admin_pages_edit', $admin . '/pages/edit/(id:num)', 'AdminPages:edit', 'GET|POST');
$router->add('admin_pages_del', $admin . '/pages/del/(id:num)', 'AdminPages:del');

/* Users */
$router->add('admin_users', $admin . '/users', 'AdminUsers:index');
$router->add('admin_users_add', $admin . '/users/add', 'AdminUsers:add', 'GET|POST');
$router->add('admin_users_edit', $admin . '/users/edit/(id:num)', 'AdminUsers:edit', 'GET|POST');
$router->add('admin_users_del', $admin . '/users/del/(id:num)', 'AdminUsers:del', 'GET|POST');
$router->add('admin_users_ban', $admin . '/users/ban/(id:num)', 'AdminUsers:ban', 'GET|POST');
$router->add('admin_users_unban', $admin . '/users/unban/(id:num)', 'AdminUsers:unban', 'GET|POST');

/* Banners */
$router->add('admin_ads', $admin . '/ads', 'AdminAds:index');
$router->add('admin_ads_add', $admin . '/ads/add', 'AdminAds:add', 'GET|POST');
$router->add('admin_ads_edit', $admin . '/ads/edit/(id:num)', 'AdminAds:edit', 'GET|POST');
$router->add('admin_ads_del', $admin . '/ads/del/(id:num)', 'AdminAds:del');
$router->add('admin_ads_stat', $admin . '/ads/(id:num)', 'AdminAds:stat');

/* Admin Logs & Notice */
$router->add('admin_logs', $admin . '/logs', 'AdminLogs:index');
$router->add('admin_logs_clear', $admin . '/logs/clear', 'AdminLogs:clear', 'GET|POST');
$router->add('admin_notice', $admin . '/notice', 'AdminLogs:notice');

/* Templates */
$router->add('admin_templates', $admin . '/templates', 'AdminTemplates:index', 'GET|POST');
$router->add('admin_templates_view', $admin . '/templates/view/(a:any)', 'AdminTemplates:view');
$router->add('admin_templates_edit', $admin . '/templates/edit?(a:all)', 'AdminTemplates:edit', 'GET|POST');
$router->add('admin_templates_del', $admin . '/templates/del/(a:all)', 'AdminTemplates:del', 'GET|POST');
$router->add('admin_templates_email', $admin . '/templates/email', 'AdminTemplates:email', 'GET|POST');
$router->add('admin_templates_email_edit', $admin . '/templates/email/edit/(a:all)', 'AdminTemplates:email', 'GET|POST');

/* Sitemap */
$router->add('admin_sitemap', $admin . '/sitemap', 'AdminSitemap:index','GET|POST');
$router->add('admin_sitemap_generate', $admin . '/sitemap/generate', 'AdminSitemap:generate');
$router->add('admin_sitemap_config', $admin . '/sitemap/config', 'AdminSitemap:config', 'GET|POST');
$router->add('admin_sitemap_del', $admin . '/sitemap/del/(a:all)', 'AdminSitemap:del');
$router->add('admin_sitemap_edit', $admin . '/sitemap/edit/(a:all)', 'AdminSitemap:edit', 'GET|POST');