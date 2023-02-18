<?php
    require_once __DIR__ . '/../config/database.php';
    require_once __DIR__ . '/../app/views/productHandler.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        header('Content-Type: application/json');

        function sortByOrder($a, $b) {
            return $a['_id'] - $b['_id'];
        };
        if(isset($_GET['id'])){ 
            if(!getProductById($_GET['id'])){
                echo json_encode((object) array());

            }else{
                echo json_encode(array_values(getProductById($_GET['id']))[0]);

            }
        }else{
            usort($products, "sortByOrder");
        
            echo json_encode($products);
            
        };
    };
?>