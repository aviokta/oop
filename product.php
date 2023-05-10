<?php
    class Product{
        public $name;
        public $price;
        public $discount;

        public function __construct($name, $price, $discount){
            $this->name=$name;
            $this->price=$price;
            $this->discount=$discount;
        }
        public function setName($name){
            $this->price=$price;
        }
        public function getName(){
            return $this->name;
        }
        public function setPrice($price){
            $this->price=$price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setDiscount($discount){
            $this->discount=$discount;
        }
        public function getDiscount(){
            return $this->discount;
        }
    }
?>