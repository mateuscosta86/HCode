<?php

require_once("config.php");
try {    
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "123321");
} catch( PDOException $e ) {  
   die( "Error connecting to SQL Server: " . $e );   
}  

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD);");

$login = "mateus";
$password = "321321";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);

?>
