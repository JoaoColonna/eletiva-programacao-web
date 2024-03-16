<?php
require_once("conn.php");
$sth = consultarAluno();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap - Primeiro Projeto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .table-bordered {
        border-radius: 10px; /* Adiciona bordas arredondadas */
        border: 1px solid #ccc; /* Adiciona uma borda sólida cinza */
        margin: 20px; /* Adiciona margem ao redor da tabela */
        padding: 10px; /* Adiciona preenchimento interno à tabela */
    }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #ccc; /* Adiciona bordas às células */
        padding: 8px; /* Adiciona preenchimento interno às células */
    }
    .table-dark th {
        background-color: #343a40; /* Altera a cor de fundo dos cabeçalhos */
        color: #fff; /* Altera a cor do texto dos cabeçalhos */
    }
</style>
</head>
<body class="container">
    <?php
        if(isset($_GET['inserir'])){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro inserido com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        } else if (isset($_GET['apagar'])){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registro inserido com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        }
    ?>
    <a href="insert.php" class="btn btn-success me-md-3">Inserir</a>
    <table class="table table-bordered caption-top">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($sth != null) {
                foreach ($sth as $row) {
            ?>
                    <tr>
                        <td><?= $row['nome'] ?></td>
                        <td><?= $row['curso'] ?></td>
                        <td>
                            <div class="btn-group mx-auto" role="group" aria-label="Ações">
                                <a href="editar.php?id=<?=$row['id']?>" class="btn btn-primary"><button type="button">✏️</button></a>
                                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger"><button type="button">🗑️</button></a>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='2'>Tabela Vazia!</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>