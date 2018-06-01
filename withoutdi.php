<?php

class StockItem {

    private $quantity;
    private $status;
    private $sku;

    public function __construct($quantity, $status ,$sku){
        $this->quantity = $quantity;
        $this->status   = $status;
        $this->sku      = $sku;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getStatus(){
        return $this->status;
    }

    public function sku(){
        return $this->sku;
    }

}

/*Lớp product trình bày như sau:*/

class Product {
    private $stockItem;
    private $code;

    public function __construct($code, $stockQuantity, $stockStatus ,$sku){
        $this->stockItem  = new StockItem($stockQuantity, $stockStatus, $sku);
        $this->code       = $code;
        $this->sku        = $sku;  
    }

    public function getStockItem(){
        return $this->stockItem;
    }

    public function getCode(){
        return $this->code;
    }

    public function sku(){
        return $this->sku;
    }
}

$product = new Product("101010", 250, "Áo Dài","Adsss");
echo $product->getCode();
var_dump($product->getStockItem());
