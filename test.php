<?php

class StockItem {

    private $quantity;
    private $status;

    public function __construct($quantity, $status){
        $this->quantity = $quantity;
        $this->status   = $status;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getStatus(){
        return $this->status;
    }

}

/*Lớp product trình bày như sau:*/

class Product {
    private $stockItem;
    private $code;

    public function __construct($code, $stockQuantity, $stockStatus){
        $this->stockItem  = new StockItem($stockQuantity, $stockStatus);
        $this->code        = $code;
    }

    public function getStockItem(){
        return $this->stockItem;
    }

    public function getCode(){
        return $this->code;
    }
}

$product = new Product("101010", 50, "Áo Dài");
var_dump($product->getStockItem());
