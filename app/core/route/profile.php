<?php

/* профиль */
$router->add('profile', '/profile', 'ProfileController:index', 'GET|POST');
$router->add('profile_setup', '/profile/setup', 'ProfileController:setup', 'GET|POST');
$router->add('profile_security', '/profile/security', 'ProfileController:security', 'GET|POST');
$router->add('profile_history', '/profile/history', 'ProfileController:history');
$router->add('profile_histor_clear', '/profile/history/clear', 'ProfileController:history_clear', 'GET|POST');
$router->add('profile_notice', '/profile/notice', 'ProfileController:notice');
$router->add('profile_bookmark', '/profile/bookmark', 'ProfileController:bookmark');
$router->add('profile_bookmark_add', '/profile/bookmark/add?(a:all)', 'ProfileController:bookmark_add');
$router->add('profile_bookmark_edit', '/profile/bookmark/edit/(id:num)', 'ProfileController:bookmark_edit', 'GET|POST');
$router->add('profile_bookmark_del', '/profile/bookmark/del/(id:num)', 'ProfileController:bookmark_del', 'GET|POST');
$router->add('profile_mail', '/profile/mail', 'ProfileController:mail');
$router->add('profile_mail_id', '/profile/mail/(id:num)', 'ProfileController:mail_id', 'GET|POST');
$router->add('profile_mail_load', '/profile/mail/load/(id:num)', 'ProfileController:mail_load');
$router->add('profile_blacklist', '/profile/blacklist', 'ProfileController:blacklist');
$router->add('profile_blacklist_add', '/profile/blacklist/add/(id:num)', 'ProfileController:blacklist_add');
$router->add('profile_blacklist_del', '/profile/blacklist/del/(id:num)', 'ProfileController:blacklist_del');
$router->add('profile_friends', '/profile/friends', 'ProfileController:friends');
$router->add('profile_friends_add', '/profile/friends/add/(id:num)', 'ProfileController:friends_add');
$router->add('profile_friends_del', '/profile/friends/del/(id:num)', 'ProfileController:friends_del');
$router->add('profile_friends_yes', '/profile/friends/yes/(id:num)', 'ProfileController:friends_yes');

