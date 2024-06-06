<?php

    namespace tests ;
    
    use PHPUnit\Framework\TestCase;
    use src\libraries\Cart;
    use src\libraries\Product;

    class CartTest extends TestCase
    {
        public function teste_is_cart()
        {
            $cart = new Cart;

            $this->assertEmpty($cart->getCart()); //verifica si o array esta vazio 
        }

        public function teste_is_not_cart()
        {
            $cart = new Cart;
            $cart->add(new Product);
            $this->assertNotEmpty($cart->getCart()); //verifica si o array esta vazio 
        }
    }
