<?php
// include inclui todo o código que estiver no arquivo conexao.php
include 'conexao.php';
// variaveis para receber dados que vem da outra página
$id_cnpj = $_POST["cnpj"];
$nome_fantasia = $_POST["nome_fant"];
$n_cnes = $_POST["cnes_est"];
$nome_estabelecimento = $_POST["empresa"];

/*echo"<pre>";
print_r($_POST);
echo"</pre>";
die;*/

// Usamos variavel $cadastro_usuario para receber TRUE ou FALSE da sintase SQL
                  // mysqli_query função para executar script sql
                                //$conexao é a variavel de conexao do arquivo conexao.php 
 $listar_empresa = mysqli_query($conexao, "SELECT * FROM estabelecimento");
 $pesquisa = mysqli_fetch_assoc($listar_empresa);

 if ($pesquisa["id_cnpj"] == $id_cnpj)

 {
    echo "<script> alert ('Empresa já possui cadastro!') </script>";
    echo "<script> location.href='cadastro_emp_executante.php'</script>";
 }



$cadastro_empresa = mysqli_query($conexao, "INSERT INTO `estabelecimento` (`id_cnpj`, `nome_fantasia`, `n_cnes`, `nome_estabelecimento`) 
VALUES ('$id_cnpj', '$nome_fantasia', '$n_cnes', '$nome_estabelecimento');");

// Verificamos se a variavel $cadastro_usuario recebeu TRUE para sucesso no cadastro
if ($cadastro_empresa == TRUE){
    echo "<script> alert ('Empresa cadastrada Sucesso!') </script>";
    echo "<script> location.href='cadastro_emp_executante.php'</script>";
}

// Caso FALSE ou outro damos erro 
else{
    echo "<script> alert ('Não foi possivel Cadastrar a empresa!') </script>"; 
    echo "<script> location.href='cadastro_emp_executante.php'</script>";
}

?>