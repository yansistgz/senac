<?php
include("cabecalho.php");

$database = "condominio"
# Seleciona o banco de dados 
mysql_select_db( $database ) or die( 'Erro na seleção do banco' );

# Executa a query desejada 
$query = "SELECT * FROM edificio"; 
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

# Exibe os registros na tela 
while ($row = mysql_fetch_array( $result_query ))
{ 
      print $row[1] . " -- " . $row[2] . " -- " . $row[3];
}

/*$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
?>