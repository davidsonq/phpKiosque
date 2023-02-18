
<?php
   require_once __DIR__ . '/../../config/database.php';

     function getProductById(int $id): array{
          global $products;
          $product = array_filter($products, function($product) use ($id) {
               return $product["_id"] === $id;
           });
          return $product;
     };

     function getProductByType(string $type): array{
          global $products;
          $product = array_filter($products, function($product) use ($type) {
               return $product["type"] === $type;
          });
          if($type == "default"){
               return $products;
          };
          return $product;
     };

?>