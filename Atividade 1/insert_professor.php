<?php
  require_once("conn.php");
  $sth = consultarAluno();
  if($_POST){
    if(isset($_POST)){
      $nome = $_POST['nome'];
      $formacao = $_POST['formacao'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $aluno_id = $_POST['aluno'];
      inserirProfessor($nome, $formacao, $telefone, $email, $aluno_id);
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
    <form action="insert_professor.php" method="POST">
      <div class="row">
        <div class="col-7 mt-3">
          <label for="nome" class="form-label">Nome do Professor:</label>
          <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label for="formacao" class="form-label">Formação:</label>
          <input type="text" class="form-control" name="formacao" id="formacao" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label class="form-label" for="email">Email:</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-7 mt-3">
          <select name="aluno" id="aluno">
            <?php
            if ($sth != null) {
              foreach ($sth as $row) {
            ?>
                <option value='<?=$row['id']?>'><?=$row['nome']?></option>  
            <?php
              }
            }
            ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col mt-3">
          <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>