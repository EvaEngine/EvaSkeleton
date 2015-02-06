<?php
error_reporting(E_ALL);
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    $loader = include __DIR__ . '/vendor/autoload.php';
} else {
    throw new RuntimeException('Unable to find loader. Run `php composer.phar install` first.');
}

$loader->addPsr4('Eva\\EvaEngine\\', __DIR__ . '/modules/EvaEngine/src/EvaEngine/');

function p($r)
{
    if (function_exists('xdebug_var_dump')) {
        echo '<pre>';
        xdebug_var_dump($r);
        echo '</pre>';
        //(new \Phalcon\Debug\Dump())->dump($r, true);
    } else {
        echo '<pre>';
        var_dump($r);
        echo '</pre>';
    }
}

/**
 * 打印指定的变量并结束程序运行
 *
 * @param $r
 */
function dd($r)
{
    p($r);
    exit();
}

/**
 * 方便链式调用，避免过多的中间变量，例如：with(new Post())->findPosts()
 *
 * @param $obj
 * @return mixed
 */
function with($obj)
{
    return $obj;
}

function array_pluck($array, $itemKey, $keepItemKey = true)
{
    $results = array();
    foreach ($array as $key => $item) {
        $itemValue = is_object($item) ? $item->$itemKey : $item[$itemKey];
        if ($keepItemKey) {
            $results[$key] = $itemValue;
        } else {
            $results[] = $itemValue;
        }
    }
    return $results;
}
