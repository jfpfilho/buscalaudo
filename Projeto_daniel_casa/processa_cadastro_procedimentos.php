<?php
// include inclui todo o código que estiver no arquivo conexao.php
include 'conexao.php';
// variaveis para receber dados que vem da outra página
$cod_procedimento = $_POST["cod_proc"];
$nome_procedimento = $_POST["nome_proc"];
$descricao_do_procediemnto = $_POST["desc_proc"];




// Usamos variavel $cadastro_usuario para receber TRUE ou FALSE da sintase SQL
                  // mysqli_query função para executar script sql
                                //$conexao é a variavel de conexao do arquivo conexao.php 
 $listar_procedimentos = mysqli_query($conexao, "SELECT * FROM `procedimentos`");
 $pesquisa = mysqli_fetch_assoc($listar_procedimentos);

 if ($pesquisa["cod_procedimento"] == $cod_procedimento)
 {
    echo "<script> alert ('Profissional já possui cadastro!') </script>";
    echo "<script> location.href='pesquisa_profissional.php'</script>";
 }
 

$cadastro_procedimentos = mysqli_query($conexao, "INSERT INTO `procedimentos` (`id_cod_procedimento`, `cod_procedimento`, `nome_procedimento`, `descricao_do_procediemnto`) 
VALUES (NULL, '$cod_procedimento', '$nome_procedimento', '$descricao_do_procediemnto');");

// Verificamos se a variavel $cadastro_usuario recebeu TRUE para sucesso no cadastro
if ($cadastro_procedimentos == TRUE){
    echo "<script> alert ('Procedimento cadastrado Sucesso!') </script>";
    echo "<script> location.href='cadastro_procedimentos.php'</script>";
}

// Caso FALSE ou outro damos erro 
else{
    echo "<script> alert ('Não foi possivel Cadastrar o procedimento!') </script>"; 
    echo "<script> location.href='cadastro_procedimento.php'</script>";
}

?>