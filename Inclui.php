<?php

require_once 'Inicia.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$cep = isset($_POST['cep']) ? $_POST['cep'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$cartao_credito = isset($_POST['cartao_credito']) ? $_POST['cartao_credito'] : null;

if (empty($nome) || empty($email) || empty($cidade) || empty($estado) || empty($cep) || empty($sexo) || empty($cartao_credito)){
    echo "É preciso preencher todos os campos do formulario de cadastro!";
    exit;
}

$PDO = conecta_bd();
$sql = 'INSERT INTO cadastroagenda6(nome,email,cidade,estado,cep,sexo,cartao_credito) VALUES (:nome, :email, :cidade, :estado, :cep, :sexo, :cartao_credito)';
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':sexo', $sexo);
$stmt->bindParam(':cartao_credito', $cartao_credito);

if ($stmt->execute()){
    header('Location:Index.php');
} else {
    echo "Ocorreu um erro na inclusão de registro";
    print_r($stmt->errorInfo());
}

?>