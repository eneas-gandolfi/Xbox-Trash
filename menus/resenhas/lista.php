<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Todas as resenhas</title>
    </head>
    <body>
        <h1>Todas as resenhas</h1>
        <?php
        //SQL para selecionar os registros
     $result_msg_cont = "SELECT * FROM resenhas ORDER BY Codigo ASC";

        //Seleciona os registros
        $resultado_msg_cont = $conn->prepare($result_msg_cont);
        $resultado_msg_cont->execute();

      while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
            echo "Número da Resenha: " . $row_msg_cont['Codigo'] . "<br>";
            echo "Nome do usuário: " . $row_msg_cont['Nome'] . "<br>";
            echo "E-mail: " . $row_msg_cont['Email'] . "<br>";
            echo "Resenha: " . $row_msg_cont['Resenha'] . "<br><hr>";
        }
        ?>
    </body>
</html>
