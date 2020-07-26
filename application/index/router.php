<?php
$router->addRoute( '/index' , function($var,$route) use($container){
	include __DIR__.'/index.php';
});
$router->addRoute( '/[s:id]' , function($id,$route) use($container){
	var_dump($id);
	include __DIR__.'/other.php';
});