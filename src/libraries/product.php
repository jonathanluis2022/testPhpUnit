<?php

    namespace src\libraries; 

    class Product{

        private string $name ; 

        public function setName(string $name)
        {
            $this->name = $name; 
        }

        public function getName()
        {
            return $this->name; 
        }
    }

   
