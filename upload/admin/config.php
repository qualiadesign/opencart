<?php

define('ADMIN', true);

$config['DIR_ADMIN'] = dirname(__FILE__) . '/';

$config['DIR_OPENCART'] = realpath('..') . '/';


# If your admin dir is not a direct subdir of the root OpenCart dir (also edit /config/admin.php)
#$config['DIR_OPENCART'] = realpath('../shop') . '/';


require_once $config['DIR_OPENCART'] . 'config.php';
