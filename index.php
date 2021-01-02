<?php
include __DIR__.'/vendor/autoload.php';
use Vht\Application;
use Illuminate\Container\Container;
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$router = new \Mezon\Router\Router();
$container = new \Illuminate\Container\Container;
$container->singleton(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=nina;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");
        return $db;
    }
);
$container->instance('request',$request);
$container->instance('router',$router);

// function        not_found()
// {
//     echo( '404' );
// }

// $container->router->addRoute( '/index' , function($var,$route) use($container){
	
// });
// $container->router->addRoute( '/[s:com]' , function($var,$route) use($container){
// 	include __DIR__."/src/router.php";
// });
// $container->router->setNoProcessorFoundErrorHandler('not_found');
require __DIR__."/application/bootstrap.php";
$container->router->callRoute($container->request->getPathInfo());

?>
