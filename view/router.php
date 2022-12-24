<?php

require '../controller/Controller.php';
require '../controller/ManufactureController.php';
require '../controller/ProductController.php';
require '../controller/UserController.php';

$login = 'login';
if(isset($_GET['login'])){
	$controller = $_GET['login'];
}

$controller = 'base';
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
}

$action = 'index';
if(isset($_GET['action'])){
	$action = $_GET['action'];
}



switch($controller){
	case 'base':
	(new Controller())->menu();
	break;
	case 'manufacture':
	switch($action){
		case 'index':
		(new ManufactureController())->index();
		break;
		case 'create':
		(new ManufactureController())->create();
		break;
		case 'store':
		(new ManufactureController())->store();
		break;
		case 'update':
		(new ManufactureController())->update();
		break;
		case 'process_update':
		(new ManufactureController())->process_update();
		break;
		case 'detail':
		(new ManufactureController())->detail();
		break;
		case 'delete':
		(new ManufactureController())->delete();
		break;	
		default:
		echo 'Nhap sai cu phap, vui long nhap lai';
		break;
	}
	break;
	case 'product':
	switch($action){
		case 'index':
		(new ProductController())->index();
		break;
		case 'create':
		(new ProductController())->create();
		break;
		case 'store':
		(new ProductController())->store();
		break;
		case 'update':
		(new ProductController())->update();
		break;
		case 'process_update':
		(new ProductController())->process_update();
		break;
		case 'detail':
		(new ProductController())->detail();
		break;
		case 'delete':
		(new ProductController())->delete();
		break;	
		default:
		echo 'Nhap sai cu phap, vui long nhap lai';
		break;
	}
	// break;
	// case 'user':
	// switch($action){
	// 	case 'index':
	// 	(new ProductController())->index();
	// 	break;
	// 	case 'create':
	// 	(new ProductController())->create();
	// 	break;
	// 	case 'store':
	// 	(new ProductController())->store();
	// 	break;
	// 	case 'update':
	// 	(new ProductController())->update();
	// 	break;
	// 	case 'process_update':
	// 	(new ProductController())->process_update();
	// 	break;
	// 	case 'detail':
	// 	(new ProductController())->detail();
	// 	break;
	// 	case 'delete':
	// 	(new ProductController())->delete();
	// 	break;	
	// 	default:
	// 	echo 'Nhap sai cu phap, vui long nhap lai';
	// 	break;
	// }
	break;
	default:
	echo 'Nhập sai controller, vui lòng nhập lại!';
	break;

}

?>