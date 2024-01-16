<?php 

$nome = $_POST['nome'];
$estadocivil = $_POST['estadocivil'];
$datanascimento=  $_POST['datanascimento'];


$connect = mysqli_connect('localhost:3306','root','','sistema');

$sql = "INSERT INTO cadastro (nome, datanascimento, estadocivil) VALUES (' $nome', '$datanascimento', '$estadocivil')";

$connect->query($sql);

$cep= $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$connect = mysqli_connect('localhost:3306','root','','sistema');

$sql = "INSERT INTO endereco (cep, rua, bairro, complemento, cidade, estado) VALUES (' $cep', '$rua', '$bairro', '$complemento', '$cidade', '$estado')";

$connect->query($sql);

    echo "CADASTRO EFETUADO COM SUCESSO";

$connect->close();


?>