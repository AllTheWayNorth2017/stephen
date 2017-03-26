<?php 
	$pathinfo = $_SERVER['PATH_INFO'];
	$pathdata = explode("/",ltrim($pathinfo,"/"));
	$module = ucfirst($pathdata[0]);
	$controller = ucfirst($pathdata[1]."Controller");
	$action = $pathdata[2];


	$autoload = function($class) {
		$file = $class.".class.php";
		if (is_file($file)) {
			require_once $file;
		}
	};
	spl_autoload_register($autoload);
	$controllername = "App\\".$module."\\"."Controller\\".$controller;
	$controller = new $controllername();
	$controller -> $action();
	//通过url：http://127.0.0.1/mvc/module/Index/hello 进行访问才行。
	//                             模型    控制器  方法