<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Pedido de Empréstimo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Formulário de Pedido de Empréstimo</h2>
        <form method="post" action="processamento.php">
            <div class="form-group">
                <label for="nomecliente">Nome do Cliente:</label>
                <input type="text" class="form-control" id="nomecliente" name="nomecliente" required>
            </div>
            <div class="form-group">
                <label for="livro">Livro:</label>
                <input type="text" class="form-control" id="livro" name="livro" required>
            </div>
            <div class="form-group">
                <label for="dataemprestimo">Data de Empréstimo:</label>
                <input type="date" class="form-control" id="dataemprestimo" name="dataemprestimo" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>