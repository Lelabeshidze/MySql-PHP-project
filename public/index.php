<?php
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

use app\controllers\ProductController;
use app\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$database = new \app\Database();
$router = new Router($database);
$router->get('/', [new ProductController(), 'index']);
$router->get('/products', [new ProductController(), 'index']);
$router->get('/products/index', [new ProductController(), 'index']);
$router->get('/addproduct', [new ProductController(), 'create']);
$router->post('/addproduct', [new ProductController(), 'create']);
$router->post('/products/delete', [new ProductController(), 'delete']);
$router->resolve();
