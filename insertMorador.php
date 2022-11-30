<?php

include("conexao.php");

$codigomorador = $_POST['codigo_morador'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$datadenascimento = $_POST['data_nascimento'];
$cep = $_POST['cep'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO `edificio`(`nome`, `cpf`, `sexo`, `data_nascimento`, `cep`) VALUES ('$nome','$cpf','$numero','$sexo','$datadenascimento','$cep')";
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