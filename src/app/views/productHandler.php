
<?php
   require_once __DIR__ . '/../../config/database.php';

     function getProductById(int $id): array{
          global $products;
          $product = array_filter($products, function($product) use ($id) {
               return $product["_id"] === $id;
          });
          if(!$product){
               throw new Exception("product not found!", 404);     
          };
          return $product;
     };

     function getProductByType(string $type): array{
          global $products;
          $product = array_filter($products, function($product) use ($type) {
               return $product["type"] === $type;
          });
          if(!count($product)){
               return $products;
          };
          return $product;
     };

     function addProduct(array $product): array{
          global $products;

          $product["_id"] = count($products);

          array_push($products, $product);
          return $product;
     };

     function calculateTab(array $prod): array{
          global $products;
          $price = 0;
          foreach ($prod as $item) {
               $id = $item["_id"];
               foreach ($products as $product) {
                    if($product["_id"] == $id)  {
                         $price += $product["price"] * $item["amount"];
                    };
               };
          };
          $valueFormated = 'R$ ' . number_format($price, 2, ',', '.');
          $value = array(
               "subtotal" => $valueFormated
          );
          return $value;
     };

     function menuReport(): string{
          global $products;
          $countProducts = count($products);
          $averagePrice = array_reduce($products, function($acc, $cur) {
               return $acc + $cur["price"];
           }, 0);
          $price =  'R$ ' . number_format($averagePrice/$countProducts , 2, ',', '.');
          $types = array_column($products, 'type');
          $frequencies = array_count_values($types);
          $mostCommonType = array_keys($frequencies, max($frequencies))[0];

          return "Products Count: $countProducts - Acarege Price: $price - Most Commom Type: $mostCommonType ";
     };
?>