<?php

$config['DIR_ADMIN'] = str_replace(
    array(DIR_OPENCART, realpath($_SERVER['DOCUMENT_ROOT']) . '/'),
    '',
    $config['DIR_ADMIN']
);


# If your admin dir is outside the root OpenCart dir ('/myshop/' -> '/myshopadmin/')
#$config['DIR_ADMIN'] = '../' . $config['DIR_ADMIN'];


$config = array_merge($config, array(
    'HTTP_CATALOG'      => $config['HTTP_SERVER'],
    'HTTP_SERVER'       => $config['HTTP_SERVER'] . $config['DIR_ADMIN'],

    'HTTPS_CATALOG'     => $config['HTTPS_SERVER'],
    'HTTPS_SERVER'      => $config['HTTPS_SERVER'] . $config['DIR_ADMIN'],

    'DIR_CATALOG'       => $config['DIR_APPLICATION'],
    'DIR_APPLICATION'   => $config['DIR_ADMIN'],
    'DIR_LANGUAGE'      => $config['DIR_ADMIN'] . 'language/',
    'DIR_TEMPLATE'      => $config['DIR_ADMIN'] . 'view/template/',
));
