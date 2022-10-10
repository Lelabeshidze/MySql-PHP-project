<?php

namespace app;

use PDO;
use \app\models\Product;

class Database
{


    public $pdo = null;

    public static ?Database $db = null;
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=scandiwebtask', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $this;
    }
    public function getProducts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteProduct($SKU)
    {
        $stmt =  $this->pdo->prepare("DELETE FROM products WHERE SKU = :SKU");
        $stmt->bindParam(':SKU', $SKU);
        return $stmt->execute();
    }

    public function createProduct(Product $product)
    {



        $stmt = $this->pdo->prepare("INSERT INTO products (SKU,Name,Price,Size,Weight,Height,Length,Width) VALUES(:SKU,:Name,:Price,:Size,:Weight,:Height,:Length,:Width)");
        $stmt->bindValue(':SKU', $product->SKU);
        $stmt->bindValue(':Name', $product->Name);
        $stmt->bindValue(':Price', $product->Price);
        $stmt->bindValue(':Size', $product->Size);
        $stmt->bindValue(':Weight', $product->Weight);
        $stmt->bindValue(':Height', $product->Height);
        $stmt->bindValue(':Length', $product->Length);
        $stmt->bindValue(':Width', $product->Width);
        $stmt->execute();
    }
}
