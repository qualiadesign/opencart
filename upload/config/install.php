<?php

$config = array_merge($config, array(
    'HTTP_OPENCART'     => $config['HTTP_SERVER'],
    'HTTP_SERVER'       => $config['HTTP_SERVER'] . 'install/',
    'DIR_APPLICATION'   => 'install/',
    'DIR_LANGUAGE'      => 'install/language/',
    'DIR_TEMPLATE'      => 'install/view/template/',
));
