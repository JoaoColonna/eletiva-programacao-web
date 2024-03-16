<?php
require_once("conn.php");

if ($_POST) {
    print_r($_POST);
    if(isset($_POST['nome']) && isset($_POST['curso'])){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];

    $algo = editarAluno($id, $nome, $curso);
  }
} else if($_GET) {
  if(isset($_GET['id'])){
    $al = consultarAluno($_GET['id']);
    $nome = $al[0]['nome'];
    $curso = $al[0]['curso'];
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="container">
    <form action="editar.php" method="POST">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <div class="row">
        <div class="col-7 mt-3">
          <label for="nome" class="form-label">Nome do Aluno:</label>
          <input type="text" value="<?=$nome?>" class="form-control" name="nome" id="nome" aria-describedby="nameHelp" required>
        </div>
        <div class="col-5 mt-3">
          <label class="form-label" for="curso">Nome do Curso</label>
          <input type="text" value="<?=$curso?>" class="form-control" id="curso" name="curso" required>
        </div>
      </div>
      <div class="row">
        <div class="col mt-3">
          <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>