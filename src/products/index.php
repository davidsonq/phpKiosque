<?php
    require_once __DIR__ . "/../app/views/productHandler.php";
    $newProduct = array(
        "description" => "TESTE" ,
        "price" => 25.99,
        "rating" => 1,
        "title" => "Teste de drink" ,
        "type" => "drink"
    );
    $table = array(
        [
            "_id" => 1,
            "amount" => 5
        ],
        [
            "_id" => 19,
            "amount" => 5
        ]
    );

    // echo var_dump(getProductById(43));
    // echo var_dump(getProductByType("fruit"));
    // echo var_dump(addProduct($newProduct));
    // echo var_dump(calculateTab($table));
    echo menuReport();
    
?>