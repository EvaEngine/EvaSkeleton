<?php

return array(
    'debug' => 1,
    'baseUri' => 'http://local.evaengine.com',
    'staticBaseUri' => 'http://static.evaengine.com',
    'cors' => array(
        array(
            'domain' => 'evaengine.com'
        ),
        array(
            'domain' => 'localhost'
        ),
    ),
    /*
     |--------------------------------------------------------------------------
     | 域名相关配置
     |--------------------------------------------------------------------------
     | 所有跟 URL 生成有关的域名配置一律写在这里
     | 使用时，使用全局的 url 方法来生成 eva_url($domainName, $baseUri, $params, $https=false)
     | 当域名不支持 https 时，$https 参数的 true 值无效，反之亦然。
     |
     |
     */
    'domains' => array(
        'main' => array(
            'domain' => 'local.evaengine.com',
            'http' => true, // 是否支持 http 协议
            'https' => false, // 是否支持 https 协议
        ),
    ),
    'user' => array(
        'loginCookieDomain' => '.local.evaengine.com'
    ),
    'permission' => array(
        'disableAll' => false,
        'superusers' => array(
            1,
        ),
    ),
    'cache' => array(
        'enable' => true,
        'fastCache' => array(
            'enable' => true,
            'host' => 'redis',
            'port' => 6379,
            'timeout' => 1,
        ),
        'globalCache' => array(
            'backend' => array(
                'adapter' => 'libmemcached',
                'options' => array(
                    'connection_name' => 'globalCache',
                    'statsKey' => null,
                    'servers' => array(
                        array(
                            'host' => 'memcache',
                            'port' => 11211,
                            'weight' => 1
                        ),
                    ),
                    'client' => array(
                        Memcached::OPT_HASH => Memcached::HASH_MD5,
                        Memcached::OPT_CONNECT_TIMEOUT => 1,    // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_RECV_TIMEOUT => 1,       // s
                        Memcached::OPT_POLL_TIMEOUT => 300      // ms
                    )
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
                'adapter' => 'libmemcached',
                'options' => array(
                    'connection_name' => 'modelsCache',
                    'statsKey' => null,
                    'servers' => array(
                        array(
                            'host' => 'memcache',
                            'port' => 11211,
                            'weight' => 1
                        ),
                    ),
                    'client' => array(
                        Memcached::OPT_HASH => Memcached::HASH_MD5,
                        Memcached::OPT_CONNECT_TIMEOUT => 1,    // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_RECV_TIMEOUT => 1,       // s
                        Memcached::OPT_POLL_TIMEOUT => 300      // ms
                    ),
                    'prefix' => 'wscn',
                ),
            ),
        ),
        'viewCache' => array(
            'backend' => array(
                'adapter' => 'libmemcached',
                'options' => array(
                    'connection_name' => 'viewCache',
                    'statsKey' => null,
                    'servers' => array(
                        array(
                            'host' => 'memcache',
                            'port' => 11211,
                            'weight' => 1
                        ),
                    ),
                    'client' => array(
                        Memcached::OPT_HASH => Memcached::HASH_MD5,
                        Memcached::OPT_CONNECT_TIMEOUT => 1,    // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_RECV_TIMEOUT => 1,       // s
                        Memcached::OPT_POLL_TIMEOUT => 300      // ms
                    )
                ),
            ),
        ),
        'apiCache' => array(
            'backend' => array(
                'adapter' => 'libmemcached',
                'options' => array(
                    'connection_name' => 'apiCache',
                    'statsKey' => null,
                    'servers' => array(
                        array(
                            'host' => 'memcache',
                            'port' => 11211,
                            'weight' => 1
                        ),
                    ),
                    'client' => array(
                        Memcached::OPT_HASH => Memcached::HASH_MD5,
                        Memcached::OPT_CONNECT_TIMEOUT => 1,    // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_SEND_TIMEOUT => 1,       // s
                        Memcached::OPT_RECV_TIMEOUT => 1,       // s
                        Memcached::OPT_POLL_TIMEOUT => 300      // ms
                    )
                ),
            ),
        ),
    ),
    'dbAdapter' => array(
        'master' => array(
            'adapter' => 'mysql',
            'dbname' => 'wscn',
            'username' => 'root',
            'host' => 'mysql',
            'password' => '123456',
            'charset' => 'utf8',
        ),
        'slave' => array(
            'slave1' => array(
                'adapter' => 'mysql',
                'dbname' => 'wscn',
                'username' => 'root',
                'host' => 'mysql',
                'password' => '123456',
                'charset' => 'utf8',
            ),
        )
    ),
    'mailer' => array(
        'async' => true,
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'encryption' => 'ssl',
        'username' => 'AlloVince',
        'password' => '',
        'defaultFrom' => array('noreply@evaengine.com' => 'EvaEngine'),
        'systemPath' => 'http://local.evaengine.com',
        'staticPath' => 'http://local.evaengine.com',
    ),
    'session' => array(
        'adapter' => 'Libmemcached',
        'options' => array(
            'uniqueId' => 'wscn',
            'statsKey' => null,
            'servers' => array(
                array(
                    'host' => 'memcache',
                    'port' => 11211,
                    'weight' => 1
                ),
            ),
            'client' => array(
                Memcached::OPT_HASH => Memcached::HASH_MD5,
                Memcached::OPT_CONNECT_TIMEOUT => 1,    // s
                Memcached::OPT_SEND_TIMEOUT => 1,       // s
                Memcached::OPT_SEND_TIMEOUT => 1,       // s
                Memcached::OPT_RECV_TIMEOUT => 1,       // s
                Memcached::OPT_POLL_TIMEOUT => 300      // ms
            ),
            'lifetime' => 3600 * 5,
            'prefix' => 'wscn-sesssion'
        )
    ),
    'queue' => array(
        'servers' => array(
            'server1' => array(
                'host' => 'gearman',
                'port' => 4730,
            ),
        ),
    ),
);
