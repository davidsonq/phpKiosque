<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando array associativos</title>
</head>
<body>
    <form method="POST" action="">
        <label for="valor">Pesquisar produto:</label>
        <input type="numeber" id="byId" name="byId" placeholder="Digite o id do produto">
        <button type="submit">Pesquisar</button>
    </form>
    <ul>
        <?php
            require_once __DIR__ . '/../../src/app/views/productHandler.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(intval($_POST['byId'])){
                    echo var_dump(getProductById(intval($_POST['byId'])));
                }else{
                    echo "Não encontrado!";
                };
                
            };
        ?>
    </ul>
</body>
</html>
