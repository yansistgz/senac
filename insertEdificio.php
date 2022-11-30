<?php

include("conexao.php");

$codigoidificio = $_POST['codigo_idificio'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$datavistoria = $_POST['data_vistoria'];
$dataconstrucao = $_POST['data_construcao'];
$nomeedificio = $_POST['nome_edificio'];

if($nomeedificio == "" || $nomeedificio == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO `edificio`(`codigo_edificio`, `cep`, `numero`, `data_construcao`, `data_vistoria`, `complemento`, `nome_idificio`) VALUES ('$nomeedificio','$cep','$numero','$dataconstrucao','$datavistoria','$complemento')";
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