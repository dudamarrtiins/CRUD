<?php 
require_once __DIR__ . '/../includes/functions.php'; 
require_once __DIR__ . '/../login/verifica_user.php'; // caminho
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaga Usuario</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php';  // inclui o header ?> 

    <h1>Apaga Usuário</h1>
    <main>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id" placeholder="Insira o ID para apagar" require><br>
        <input type="submit" value="Apagar">
    </form> <!-- Forms simples-->
    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
    apagar($conexao, $_POST['id']);
    }
    ?>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
