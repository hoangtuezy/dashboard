<?php
namespace Tuezy;
use Closure;
use Illuminate\Container\Container;
class Application{
	public function __construct($app){
		$this->app = $app;
	}
	public function execute(){
		$this->app->router->callRoute($this->app->request->getPathInfo());
	}
}
