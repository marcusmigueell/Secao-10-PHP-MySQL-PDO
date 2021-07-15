<?php

    if (!empty($_POST['usuario']) && !empty($_POST['senha'])){

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';  

        try {

            $conexao = new PDO($dsn, $usuario, $senha);

            $query = "select * from tb_usuarios where ";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();


        } catch(PDOException $e) {
            echo 'Erro' . $e->getCode(). ' Mensagem: ' . $e->getMessage();
            //registrar erro para corrigir ou evitar
        }
    }
    

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>
        <form action="index.php" method="POST">
            <input type="text" placeholder="Usuário" name="usuario" id="">
            <br>
            <input type="password" placeholder="senha" name="senha" id="">
            <br>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>