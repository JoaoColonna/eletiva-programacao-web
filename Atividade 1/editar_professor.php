<?php
require_once("conn.php");

if ($_POST) {
    print_r($_POST);
    if(isset($_POST['nome'])){
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $formacao = $_POST['formacao'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $aluno_id = $_POST['aluno'];

    $algo = editarProfessor($id, $nome, $formacao, $telefone, $email, $aluno_id);
  }
} else if($_GET) {
  if(isset($_GET['id'])){
    $al = consultarProfessor($_GET['id']);
    // print_r($al);  
    $nome = $al[0]['Nome'];
    $formacao = $al[0]['Formacao'];
    $telefone = $al[0]['Telefone'];
    $email = $al[0]['Email'];
    $aluno = $al[0]['Aluno'];
    $sth = consultarAluno();
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
    <form action="editar_professor.php" method="POST">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <div class="row">
      <div class="col-7 mt-3">
          <label for="nome" class="form-label">Nome do Professor:</label>
          <input value="<?=$nome?>" type="text" class="form-control" name="nome" id="nome" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label for="formacao" class="form-label">Formação:</label>
          <input value="<?=$formacao?>" type="text" class="form-control" name="formacao" id="formacao" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input value="<?=$telefone?>" type="text" class="form-control" name="telefone" id="telefone" aria-describedby="nameHelp" required>
        </div>
        <div class="col-7 mt-3">
          <label class="form-label" for="email">Email:</label>
          <input value="<?=$email?>" type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-7 mt-3">
          <select name="aluno" id="aluno">
            <?php
            if ($sth != null) {
              foreach ($sth as $row) {
                if($row['id'] == $aluno){
            ?>
                <option value='<?=$row['id']?>' selected><?=$row['nome']?></option>
            <?php 
                } else {
            ?>
                <option value='<?=$row['id']?>'><?=$row['nome']?></option>  
            <?php
                }
              }
            }
            ?>
          </select>
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