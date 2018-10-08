<?php

class Cart extends model {

    public function getList() {
        $products = new Products();

        $array = array();
        $cart = array();

        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }

        foreach ($cart as $id => $qt) {

            $info = $products->getInfo($id);

            $array[] = array(
                'id' => $id,
                'name' => $info['name'],
                'image' => $info['image'],
                'qt' => $qt,
                'price' => $info['price']
            );
        }

        return $array;
    }

}
