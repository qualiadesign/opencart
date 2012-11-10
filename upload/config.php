<?php

define('DIR_OPENCART', dirname(__FILE__) . '/');
define('WEB_OPENCART', $_SERVER['SERVER_NAME'] . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', DIR_OPENCART));

if (!isset($config)) { $config = array(); }  # may be initialised in DIR_ADMIN/config.php

require_once 'config/default.php';

if (getenv('OPENCART_ENV')) {
    $envConfigFile = 'config/env-' . getenv('OPENCART_ENV') . '.php';
    if (file_exists($envConfigFile)) { require_once $envConfigFile; }
}

if (defined('ADMIN'))      { require_once 'config/admin.php';   }
if (defined('INSTALLING')) { require_once 'config/install.php'; }

foreach ($config as $k => $v) {
    if (0 === strpos($k, 'DIR_')) { $v = DIR_OPENCART . $v; }
    if (!defined($k)) { define($k, $v); }
}

unset($config, $envConfigFile);
