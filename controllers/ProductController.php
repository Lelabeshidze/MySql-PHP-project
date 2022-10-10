<?php

namespace app\controllers;

use app\models\Product;
use app\Router;

class ProductController
{
    public function create(Router $router)
    {
        $productData = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData['SKU'] = $_POST['SKU'];
            $productData['Name'] = $_POST['Name'];
            $productData['Price'] = $_POST['Price'];
            $productData['Size'] = $_POST['Size'];
            $productData['Weight'] = $_POST['Weight'];
            $productData['Height'] = $_POST['Height'];
            $productData['Length'] = $_POST['Length'];
            $productData['Width'] = $_POST['Width'];
            $product = new Product();
            $product->load($productData);
            $product->save();
            header('Location: /products');
            exit;
        }

        $router->renderView('products/create', [
            'product' => $productData
        ]);
    }
    public function Index(Router $router)
    {
        $products =  $router->database->getProducts();
        $router->renderView('products/index', ['products' => $products]);
    }
    public function delete(Router $router)
    {
        $SKU = $_POST['SKU'] ?? null;
        if (!$SKU) {
            header('Location: /products');
            exit;
        }
        if ($router->database->deleteProduct($SKU)) {
            header('Location: /products');
            exit;
        }
    }
}
