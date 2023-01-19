<?php
include_once('conexao.php');
?>


<?php
$estado=$_POST['estado'];

$consulta = mysqli_query($conexao, "SELECT cliente.Nome_cliente Cliente,cliente.data_nascimeto Nascimento,cliente.cpf,cliente.telefone,estado.nome_estado estado
                                        FROM cliente inner join estado
                                        on estado.Cod_estado = cliente.Cod_estado
                                        WHERE estado.Cod_estado like '%$estado%'");

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nome do Cliente</th>";
    echo "<th>Data de Nascimeto</th>";
    echo "<th>CPF</th>";
    echo "<th>Telefone</th>";
    echo "<th>Estado</th>";
    echo "</tr>";
    
    while ($linha = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>";
        echo $linha['Cliente'];
        echo "</td>"; 
        echo "<td>";
        echo $linha['Nascimento'];
        echo "</td>"; 
        echo "<td>";
        echo $linha['cpf'];
        echo "</td>"; 
        echo "<td>";
        echo $linha['telefone'];
        echo "</td>"; 
        echo "<td>";
        echo $linha['estado'];
        echo "</td>"; 
        echo "</tr>";
    }
?>
