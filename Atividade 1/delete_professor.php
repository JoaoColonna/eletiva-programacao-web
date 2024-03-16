<?php
require_once("conn.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    global $dbh;
    $sql = "DELETE FROM professor WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

}    
header("Location: index_professor.php?apagar=ok");
?>