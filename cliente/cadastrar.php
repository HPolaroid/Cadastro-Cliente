<?php
include_once('conexao.php')
?>
<?php
$cliente=$_POST['cliente'];
$data=$_POST['data'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$estado=$_POST['estado'];

$insere= mysqli_query($conexao, "INSERT INTO cliente(Nome_cliente,data_nascimeto,cpf,telefone,Cod_estado)
                                                   values('$cliente','$data','$cpf','$telefone','$estado')")
                                                   or die("Erro a cadastrar o Cliente");

                                                   echo('Cliente Cadastrado com Sucesso!');
?>