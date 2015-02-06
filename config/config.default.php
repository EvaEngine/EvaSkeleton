<?php

return array(
    //Phalcon default settings
    'baseUri' => '/',
    'staticBaseUri' => '/static',
    'staticBaseUriVersionFile' => __DIR__ . '/../.git/FETCH_HEAD',

    //System DI settings:
    'debug' => 1, //Global debug switcher
    'optimize' => false,

    'permission' => array(
        'disableAll' => true
    ),

    'modelsMetadata' => array(
        'enable' => true,
        'adapter' => 'files',
        'options' => array(
            'metaDataDir' => __DIR__ . '/../cache/schema/'
        ),
    ),
    'error' => array(
        'disableLog' => 0,
        'logPath' => __DIR__ . '/../logs/',
        'controllerNamespace' => '',
        'controller' => 'error',
        'action' => 'index',
        'viewpath' => '',
    ),
    'assets' => array(
        'cdn' => '',
        'compress' => false,
        'combine' => false,
        'sourceDir' => __DIR__ . '/../public',   //MUST no slash end!
        'targetDir' => __DIR__ . '/../public/cache', //MUST no slash end!
        'gitDir' => __DIR__ . '/../.git/',
        'combinePath' => '/cache/',  //no domain
        'combineDomainPath' => '/',
        'combineCache' => true,
        'version' => null, //if use empty version will read system git last commit hash
    ),
    'tokenStorage' => array(
        'frontend' => array(
            'adapter' => 'Json',
            'options' => array(
                'lifetime' => 172800
            ),
        ),
        'backend' => array(
            'adapter' => 'File',
            'options' => array(
                'cacheDir' => __DIR__ . '/../cache/token/',
            ),
        ),
    ),
    'cache' => array(
        'enable' => false,
        'fastCache' => array(
            'enable' => true,
            'host' => '127.0.0.1',
            'port' => 6379,
            'timeout' => 1,
        ),
        'globalCache' => array(
            'enable' => true,
            'frontend' => array(
                'adapter' => 'Data',
                'options' => array(),
            ),
            'backend' => array(
                'adapter' => 'File',
                'options' => array(
                    'cacheDir' => __DIR__ . '/../cache/global/',
                ),
            ),
        ),
        'viewCache' => array(
            'enable' => true,
            'frontend' => array(
                'adapter' => 'Output',
                'options' => array(),
            ),
            'backend' => array(
                'adapter' => 'File',
                'options' => array(
                    'cacheDir' => __DIR__ . '/../cache/view/',
                ),
            ),
        ),
        'modelsCache' => array(
            'enable' => true,
            'frontend' => array(
                'adapter' => 'Data',
                'options' => array(),
            ),
            'backend' => array(
                'adapter' => 'File',
                'options' => array(
                    'cacheDir' => __DIR__ . '/../cache/model/',
                ),
            ),
        ),
        'apiCache' => array(
            'enable' => true,
            'frontend' => array(
                'adapter' => 'Json',
                'options' => array(),
            ),
            'backend' => array(
                'adapter' => 'File',
                'options' => array(
                    'cacheDir' => __DIR__ . '/../cache/api/',
                ),
            ),
        ),
    ),
    'session' => array(
        'adapter' => 'files',
        'options' => array(
            'lifetime' => 3600 * 3, //3 hours
        )
    ),
    'thumbnail' => array(
        'default' => array(
            'enable' => false,
            'baseUri' => '',
            'errorUri' => '',
        ),
        'thumbers' => array(
            'uploads' => array(
                'adapter' => 'gd',
                'cache' => 1,
                'source_path' => __DIR__ . '/../public/uploads',
                'thumb_cache_path' => __DIR__ . '/../public/thumbnails/thumb',
            ),
        ),
    ),
    'app' => array(
        'title' => 'EvaEngine',
        'subtitle' => '',
    ),
    'logger' => array(
        'adapter' => 'File',
        'path' => __DIR__ . '/../logs/',
//        'defaultName' => 'system',
    ),
    'translate' => array(
        'enable' => true,
        'path' => __DIR__ . '/../languages/',
        'adapter' => 'csv',
        'forceLang' => 'zh_CN',
    ),
    'datetime' => array(
        'defaultTimezone' => 8,
        //'defaultFormat' => 'F j, Y, g:i a',
        'defaultFormat' => 'Y年m月d日 H:i:s',
    ),
    'filesystem' => array(
        'classSeparator' => '!',
        'default' => array(
            'adapter' => 'Gaufrette\\Adapter\\Local',
            'baseUrlForLocal' => '/uploads',
            'uploadPath' => __DIR__ . '/../public/uploads/',
            'uploadTmpPath' => __DIR__ . '/../public/tmp/',
        ),


    ),
    'dbAdapter' => array(
        'prefix' => 'eva_',
        'master' => array(/*
            'adapter' => 'mysql',
            'host' => '192.168.1.228',
            'dbname' => 'eva',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
            'prefix' => 'eva_',
            */
        ),
        'slave' => array(/*
            'slave1' => array(
                'adapter' => 'mysql',
                'host' => '192.168.1.233',
                'dbname' => 'eva',
                'username' => 'root',
                'password' => '',
                'charset'  => 'utf8',
                'prefix' => 'eva_',
            ),
            */
        )
    ),
    'queue' => array(
        'servers' => array(
            'server1' => array(
                'host' => '127.0.0.1',
                'port' => 4730,
            ),
        ),
    ),
    'mailer' => array(
        'async' => false, //if true will use queue to send， require run worker/sendmail.php
        'transport' => 'smtp', //or sendmail
        'sendmailCommand' => '/usr/sbin/exim -bs',
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'encryption' => 'ssl',
        'username' => 'username',
        'password' => 'password',
        'defaultFrom' => array('noreply@wallstreetcn.com' => 'WallsteetCN'),
        'systemPath' => 'http://evaengine.com/',
        'staticPath' => 'http://evaengine.com/',
    ),
    'smsSender' => array(
        'provider' => 'submail',
        'timeout' => 1,
        'appid' => '',
        'appkey' => '',
    ),
);
