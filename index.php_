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


<?php
include 'vendor/autoload.php';
define('DS',DIRECTORY_SEPARATOR);
define('APP',__DIR__.DS);
use Vht\Src\View\AbstractView as View;
use Vht\Src\ApplicationManager as Application;
$app_manager = new Application;

$app_manager->register("index");
$app_manager->register("admin");
$app_manager->register(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=demo;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");
        return $db;
    }
);

$router = new \Mezon\Router\Router();
$app_manager->register('router',$router);
// $app_manager->get('index')->setView(__DIR__.DS."views",__DIR__.DS."views/@cache");

// foreach ($app_manager->get("PDO")->query("select * from table_product ") as $row) {
//     print $row['ten_vi'] . '<br />';
  
// }
// echo $app_manager->get('index')->view->make('app', ['name' => 'John Doe'])->render();
// $view = new View(__DIR__.DS."views",__DIR__.DS."views/@cache");

// $ioc = new \Illuminate\Container\Container;
// $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
// $ioc->instance('Symfony\Component\HttpFoundation\Request', $request);

// $ioc->instance('view',$view);
// $ioc->singleton(
//     'PDO',
//     function () {

//         $db = new \PDO('mysql:dbname=nina;host=localhost', 'root', '');
//         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $db->exec("SET NAMES 'UTF8'");
//         return $db;
//     }
// );
// echo('<pre>');
// var_dump($request->getPathInfo());
// echo('</pre>');
// foreach ($ioc->PDO->query("select * from table_product ") as $row) {
//     print $row['ten_vi'] . "\t";
  
// }
// use Application\App;
// $app = new App($ioc);

// $app->setView(__DIR__.DS."views",__DIR__.DS."views/@cache");
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
function        sitemap()
{
    echo( 'Some fake sitemap' );
}


$router->addRoute( '/sitemap/' , 'sitemap' );
$router->addRoute( '/index' , function($route , $variables) use ($request){
	var_dump($variables);
} , 'GET' );
$router->setNoProcessorFoundErrorHandler(function(){
	echo 'haha';
});
$router->callRoute($request->getPathInfo());



?>
