<?php
namespace Model;
class Product {
    public $id;
    public $name;
    public $description;
    public $price;
    public $producer;
    public function __construct( $name,$description, $price, $producer)
    {
       
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->producer = $producer;
    }
}