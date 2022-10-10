<?php

namespace app\models;

use app\Database;

class Product
{


    public $SKU;
    public $Name;
    public $Price;
    public $Size;
    public $Weight;
    public $Height;
    public $Length;
    public $Width;

    public function load($data)
    {
        $this->SKU = $data['SKU'] ?? null;
        $this->Name = $data['Name'];
        $this->Price = $data['Price'];
        $this->Size = $data['Size'];
        $this->Height = $data['Height'];
        $this->Weight = $data['Weight'];
        $this->Length = $data['Length'];
        $this->Width = $data['Width'];
       
    }
    public function save()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!$this->SKU) {
                $errors[] = 'Product SKU is required';
            }
            if (!$this->Name) {
                $errors[] = 'Product Name is required';
            }
            if (!$this->Size) {
                $errors[] = 'Product Size is required';
            }
            if (!$this->Price) {
                $errors[] = 'Product Price is required';
            }
            if (!$this->Weight) {
                $errors[] = 'Product Weight is required';
            }
            if (!$this->Height) {
                $errors[] = 'Product Height is required';
            }
            if (!$this->Length) {
                $errors[] = 'Product Length is required';
            }
            if (!$this->Width) {
                $errors[] = 'Product Width is required';
            }
        }



        if (empty($errors)) {
            $db = Database::$db;
            $db->createProduct($this);
        } else {
            echo $errors;
        }
    }
}
