<?php
require_once 'Inicia.php';
$codigo = isset($_GET['codigo']) ? (int) $_GET['codigo'] : null;

if (empty($codigo)){
    echo "Código para exclusão não foi definido";
    exit;
}

$PDO = conecta_bd();
$sql = 'DELETE FROM cadastroagenda6 WHERE codigo = :codigo';
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':codigo', $codigo, PDO::PARAM_INT);
if ($stmt->execute()){
    header('Location: Index.php');
} else {
    echo "Ocorreu um erro ao excluir o cadastro";
    print_r($stmt->errorInfo());  
}
?>