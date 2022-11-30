<?php

include("conexao.php");

$numeroapartamento = $_POST['numero_apto'];
$areaapartamento = $_POST['area_apto'];
$codigoidificio = $_POST['codigo_idificio'];
$codigomorador = $_POST['codigo_morador'];
$valorapartamento = $_POST['valor_apartamento'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO `edificio`(`numero_apto`, `area_apto`, `codigo_idificio`, `codigo_morador`, `valor_apartamento`) VALUES ('$numeroapartamento','$areaapartamento','$codigoidificio','$codigomorador','$valorapartamento')";
    $insert = mysqli_query($conn,$query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedificio.php'</script>";
      }

}


?>