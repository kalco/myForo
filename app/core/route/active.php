<?php

/* активность на сайте */
$router->add('active_thems', '/active/thems/(id:num)', 'ActiveController:thems');
$router->add('active_posts', '/active/posts/(id:num)', 'ActiveController:posts');
