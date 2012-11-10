<?php

# To load environment-specific config settings, put 'SetEnv OPENCART_ENV xxxxx' in your webserver vhost conf
# and then create a file called config/env-xxxxx.php containing your settings.
# Common values for 'xxxxx' would be 'dev' (development), 'prod' (production) or 'staging'.
# 
# If you don't have access to the vhost conf file you can use .htaccess with SetEnvIf or RewriteRule
# See http://stackoverflow.com/a/4139899 for more info.


# Base/default config settings.

$config = array_merge($config, array(
    'HTTP_SERVER'       => 'http://' . WEB_OPENCART,
    'HTTPS_SERVER'      => 'http://' . WEB_OPENCART,

    'DIR_APPLICATION'   => 'catalog/',
    'DIR_SYSTEM'        => 'system/',
    'DIR_DATABASE'      => 'system/database/',
    'DIR_LANGUAGE'      => 'catalog/language/',
    'DIR_TEMPLATE'      => 'catalog/view/theme/',
    'DIR_CONFIG'        => 'system/config/',
    'DIR_IMAGE'         => 'image/',
    'DIR_CACHE'         => 'system/cache/',
    'DIR_DOWNLOAD'      => 'download/',
    'DIR_LOGS'          => 'system/logs/',
));


# Change these if you want to serve images from a cookieless domain.

$config['HTTP_IMAGE']  = $config['HTTP_SERVER']  . $config['DIR_IMAGE'];
$config['HTTPS_IMAGE'] = $config['HTTPS_SERVER'] . $config['DIR_IMAGE'];


# Uncomment this (e.g. in config/env-{ENV}.php) to override 'Display errors' in Settings.

#$config['ERROR_DISPLAY'] = true

