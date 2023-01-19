<?php
include_once('conexao.php')
?>

<?php
$estado=$_POST['estado'];  
$consulta = mysqli_query($conexao, "DELETE FROM cliente
                                    WHERE cliente.Cod_estado like '%$estado%'");

echo("Clientes apagados com sucesso!");
?>