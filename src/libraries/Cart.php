<?php

    namespace src\libraries ; 

    class Cart {
        private $products = [];

        public function add(Product $products)
        {
            $this->products[] = $products ;
        }

        public function getCart()
        {
            return $this->products ; 
        }
    }