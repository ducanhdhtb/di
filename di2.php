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
$stockItem = new StockItem(510, "Áo Dài");


class Product {
    private $stockItem;
    private $code;

    public function __construct($code){
        $this->code        = $code;
    }

    public function getStockItem(){
        return $this->stockItem;
    }

    public function getCode(){
        return $this->code;
    }

    public function setStockItem(StockItem $stockItem){
        $this->stockItem = $stockItem;
    }
}

$product = new Product("101010");

$product->setStockItem($stockItem);
var_dump($product->getStockItem());