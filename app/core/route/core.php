<?php

/* Global */
$router->add('home', '/', 'MainController:index');
$router->add('captcha', '/captcha', 'MainController:captcha');
$router->add('preview', '/bbcode/ajax', 'MainController:bbcode_ajax', 'POST');
$router->add('smiles', '/smiles', 'MainController:smiles', 'GET|POST');
$router->add('bbcode', '/bbcode', 'MainController:bbcode');

/* Ads */
$router->add('ads', '/go/(id:num)', 'AdsController:index');

/* Pages */
$router->add('pages', '/pages/(id:num)-(a:any)', 'PagesController:index');

/* Forums */
$router->add('forum_id', '/forums/(id:num).(a:any)', 'MainController:forum');
$router->add('forum_add', '/forums/add', 'MainController:add', 'GET|POST');
$router->add('forum_theme', '/forums/thread-(id:num)', 'MainController:theme', 'GET|POST');
$router->add('forum_add_id', '/setup/add/(id:num)', 'MainController:add_forum', 'GET|POST');
$router->add('forum_setup', '/setup/(id:num)', 'MainController:setup', 'GET|POST');
$router->add('forum_setup_del', '/setup/del/(id:num)', 'MainController:setup_del', 'GET|POST');
$router->add('forum_tema_closed', '/forums/thread-(id:num)/lock', 'MainController:closed');
$router->add('forum_tema_open', '/forums/thread-(id:num)/open', 'MainController:open');
$router->add('forum_tema_up', '/forums/thread-(id:num)/sticky', 'MainController:tema_up');
$router->add('forum_tema_down', '/forums/thread-(id:num)/unsticky', 'MainController:tema_down');
$router->add('forum_tema_setup', '/forums/thread-(id:num)/edit', 'MainController:tema_setup', 'GET|POST');
$router->add('forum_tema_del', '/forums/thread-(id:num)/del', 'MainController:tema_del', 'GET|POST');

$router->add('forum_post_setup', '/post/(id:num)/edit', 'MainController:post_setup', 'GET|POST');
$router->add('forum_post_del', '/post/(id:num)/del', 'MainController:post_del', 'GET|POST');
$router->add('forum_post_reply', '/post/(id:num)/reply', 'MainController:post_reply', 'GET|POST');
$router->add('forum_post_quote', 'post/(id:num)/quote', 'MainController:post_quote', 'GET|POST');
$router->add('forum_post', '/post/(id:num)', 'MainController:post');

$router->add('forum_add_theme', '/(id:num)/(id2:num)/add', 'MainController:add', 'GET|POST');
$router->add('forum_load_file', '/(id:num)/(id2:num)/(id3:num)/load/(id4:num)', 'MainController:load');

$router->add('forum_new_thems', '/new/thems', 'MainController:new_thems');
$router->add('forum_new_posts', '/new/posts', 'MainController:new_posts');
$router->add('forum_search', '/search', 'MainController:search', 'GET|POST');
$router->add('forum_search_result', '/search/(a:any)', 'MainController:search', 'GET|POST');
$router->add('forum_theme_files', '/(id:num)/(id2:num)/(id3:num)/files', 'MainController:files', 'GET|POST');
$router->add('forum_theme_vote', '/forums/thread-(id:num)/vote-(id2:num)', 'MainController:vote', 'GET|POST');
$router->add('forum_theme_vote_edit', '/(id:num)/(id2:num)/(id3:num)/vote/edit', 'MainController:vote_edit', 'GET|POST');
$router->add('forum_theme_vote_del', '/(id:num)/(id2:num)/(id3:num)/vote/del', 'MainController:vote_del', 'GET|POST');
$router->add('forum_theme_vote_all', '/(id:num)/(id2:num)/(id3:num)/vote/all', 'MainController:vote_all');
