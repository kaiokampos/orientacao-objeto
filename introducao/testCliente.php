<?php include "classes/cliente.class.php";

$cliente = new Cliente();
$cliente->nome= "Fernanda";
$cliente->telefone= "123456789";
$cliente->email= "fernanda@gmail.com";
$cliente->cpf= "123.455.789-41";

echo $cliente->nome;
echo "<br/>";
echo $cliente->telefone;
echo "<br/>";
echo $cliente->email;
echo "<br/>";
echo $cliente->cpf;

?>