<?php

include __DIR__.'/vendor/autoload.php';
define('DS',DIRECTORY_SEPARATOR);
use Vht\View\ViewEngine as ViewEngine;
use Illuminate\Container\Container;
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$router = new \Mezon\Router\Router();
$container = new \Illuminate\Container\Container;
$view = new ViewEngine(__DIR__.DS."views",__DIR__.DS."views/@cache");

$container->singleton(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=dashboard;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");
        return $db;
    }
);
$container->instance('request',$request);
$container->instance('router',$router);

foreach ($container->PDO->query("select * from table_product ") as $row) {
    print $row['tenvi'] . "\t";
}
