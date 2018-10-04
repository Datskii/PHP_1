<?php
function getCart($cart){
    foreach($cart as $oneProductCart){
        $oneProductCart = queryOne("SELECT * FROM products WHERE id ={$oneProductCart['id']}");
        $oneProductCart += ['name' => $oneProductCart['name']];
        $oneProductCart += ['price' => $oneProductCart['price']];
        $oneProductCart += ['cost' => $oneProductCart['price'] * $oneProductCart['count']];

        $image = queryOne("select * from image_products where products_id='{$oneProductCart['id']}'");
        $oneProductCart += ['min_image' => $image['path']];
    }
    return $cart;
}