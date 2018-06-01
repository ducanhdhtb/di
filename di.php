<?php

class StockItem {

    private $quantity;
    private $status;
    private $sku;

    public function __construct($quantity, $status ,$sku){
        $this->quantity = $quantity;
        $this->status   = $status;
        $this->sku   = $sku;

    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getStatus(){
        return $this->status;
    }

}

class Product {
    private $stockItem;
    private $code;

    public function __construct($code, StockItem $stockItem){
        $this->stockItem   = $stockItem;
        $this->code        = $code;
    }

    public function getStockItem(){
        return $this->stockItem;
    }

    public function getCode(){
        return $this->code;
    }
}

$stockItem = new StockItem(50, "Áo Dài","sku0011");
$product = new Product("101010", $stockItem);
var_dump($product->getStockItem());

?>