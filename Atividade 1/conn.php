<?php
$user = 'root';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=banco_php', $user);
} catch (PDOException $e) {
    echo "error: ". $e->getMessage();
} 
    
function consultarAluno($id = false) {
    global $dbh;
    $query = "SELECT * FROM aluno";
    
    if($id !== false){
        $query .= " WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindValue(":id", $id);
    } 
    else {
        $stmt = $dbh->prepare($query);
    }
    
    $stmt->execute();
    $a = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(!empty($a)){
        return $a;
    }
    return null;

}
function consultarProfessor($id = false) {
    global $dbh;
    $query = "SELECT * FROM professor";
    
    if($id !== false){
        $query .= " WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindValue(":id", $id);
    } 
    else {
        $stmt = $dbh->prepare($query);
    }
    
    $stmt->execute();
    $a = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(!empty($a)){
        return $a;
    }
    return null;

}
    
function inserirAluno($nome, $curso){
    global $dbh;
    $stmt = $dbh->prepare("INSERT INTO Aluno (nome, curso) VALUES (:nome, :curso)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':curso', $curso);
    $stmt->execute();

    header("Location: index.php?inserir=ok");
    die;

}
function inserirProfessor($nome, $formacao, $telefone, $email, $aluno_id){
    global $dbh;
    $stmt = $dbh->prepare("INSERT INTO Professor (Nome, Formacao, Telefone, Email, Aluno) VALUES (:nome, :formacao, :telefone, :email, :aluno_id)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':formacao', $formacao);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':aluno_id', $aluno_id);
    $stmt->execute();

    header("Location: index_professor.php?inserir=ok");
    die;

}

function editarAluno($id, $nome, $curso){
    echo "entrou";
    global $dbh;
    $stmt = $dbh->prepare("UPDATE Aluno SET nome=? , curso=?  WHERE id=? ");
    $stmt->execute([$nome, $curso, $id]);

    header("Location: index.php?editar=ok");
    die;
}

function editarProfessor($id, $nome, $formacao, $telefone, $email, $aluno_id){
    // echo "entrou";
    global $dbh;
    $stmt = $dbh->prepare("UPDATE Professor SET Nome=? , Formacao=? , Telefone=? , Email=? , Aluno=? WHERE id=? ");
    $stmt->execute([$nome, $formacao, $telefone, $email, $aluno_id, $id]);

    header("Location: index_professor.php?editar=ok");
    die;
}