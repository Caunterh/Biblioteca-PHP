<?php
include_once("config/conexao.php");

$data = $_POST; 

if (!empty($data)) {
    try {
        $nomecliente = $data["nomecliente"];
        $livro = $data["livro"];
        $dataemprestimo = $data["dataemprestimo"];

        $query = "INSERT INTO pedidos_emprestimos (nomecliente, livro, dataemprestimo) 
                  VALUES (:nomecliente, :livro, :dataemprestimo)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nomecliente", $nomecliente);
        $stmt->bindParam(":livro", $livro);
        $stmt->bindParam(":dataemprestimo", $dataemprestimo);

        $stmt->execute();
        echo '<p style="text-align: center; background-color: black; padding: 10px; border: 1px solid #ccc; font-weight: bold; color: white; font-size: 1.2em;">Dados salvos com sucesso!</p>';

    } catch (PDOException $e) {
        $erro = $e->getMessage();
        echo $erro;
    }
}