
<?php
   require_once __DIR__ . '/../../config/database.php';

     function getProductById(int $id): array{
          global $products;
          $product = array_filter($products, function($product) use ($id) {
               return $product["_id"] === $id;
           });
          return $product;
     };

?>