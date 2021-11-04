<?php
// include inclui todo o código que estiver no arquivo conexao.php
include 'conexao.php';
// variaveis para receber dados que vem da outra página
$cpf = $_POST["cpf_prof"];
$nome_profissional = $_POST["nome_prof"];
$sexo = $_POST["sexo"];
$especialidade = $_POST["especialidade"];
$n_conselho = $_POST["n_conselho"];
$n_cnes = $_POST["n_cnes"];

/*echo"<pre>";
print_r($_POST);
echo"</pre>";
die;*/



// Usamos variavel $cadastro_usuario para receber TRUE ou FALSE da sintase SQL
                  // mysqli_query função para executar script sql
                                //$conexao é a variavel de conexao do arquivo conexao.php 
 $listar_profissional = mysqli_query($conexao, "SELECT * FROM profissional");
 $pesquisa = mysqli_fetch_assoc($listar_profissional);

 if ($pesquisa["cpf"] == $cpf)
 {
    echo "<script> alert ('Profissional já possui cadastro!') </script>";
    echo "<script> location.href='cadastro_profissional.php'</script>";
 }
 

$cadastro_profissional = mysqli_query($conexao, "INSERT INTO `profissional` (`cpf`, `nome_profissional`, `sexo`, `especialidade`, `n_conselho`, `n_cnes`) 
VALUES ('$cpf', '$nome_profissional ', '$sexo', '$especialidade ', '$n_conselho', '$n_cnes');");

// Verificamos se a variavel $cadastro_usuario recebeu TRUE para sucesso no cadastro
if ($cadastro_profissional == TRUE){
    echo "<script> alert ('Profissional cadastrado Sucesso!') </script>";
    echo "<script> location.href='cadastro_profissional.php'</script>";
}

// Caso FALSE ou outro damos erro 
else{
    echo "<script> alert ('Não foi possivel Cadastrar o profissional!') </script>"; 
    echo "<script> location.href='cadastro_profissional.php'</script>";
}

?>