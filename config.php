<?php 

$dbhost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName = 'form_database';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";

}
else{
    
    echo "Conexão efetuada com sucesso";
}
?>