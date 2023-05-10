<?php
    require_once('product.php');

    class CDMusic extends Product {
        public $artist;
        public $genre;

        public function __construct($name, $price, $discount, $artist, $genre){
            parent::__construct($name, $price, $discount);
            $this->artist=$artist;
            $this->genre=$genre;
        }
        public function setArtist($artist){
            $this->artist=$artist;
        }
        public function getArtist(){
            return $this->artist;
        }
        public function setGenre($genre){
            $this->genre=$genre;
        }
        public function getGenre(){
            return $this->genre;
        }
        public function getPrice(){
            return $this->price + ($this->price * 0.1);
        }
        public function getDiscount(){
            return $this->discount + 0.05;
        }
        public function Total() {
            $totalprice = $this->getPrice() - ($this->getPrice() * $this->getDiscount());
            return $totalprice;
        }
    }
?>