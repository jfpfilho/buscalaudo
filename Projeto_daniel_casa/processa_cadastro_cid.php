<?php
// include inclui todo o código que estiver no arquivo conexao.php
include 'conexao.php';
// variaveis para receber dados que vem da outra página
$cod_cid1 = $_POST["cod"];
$desc_cid = $_POST["nome_desc_cid"];




// Usamos variavel $cadastro_usuario para receber TRUE ou FALSE da sintase SQL
                  // mysqli_query função para executar script sql
                                //$conexao é a variavel de conexao do arquivo conexao.php 
$listar_cid = mysqli_query($conexao, "SELECT * FROM cid");
$pesquisa = mysqli_fetch_assoc($listar_cid);

 if ($pesquisa["cod_cid"] == $cod_cid1)
 {
    echo "<script> alert ('CID já possui cadastro!') </script>";
    echo "<script> location.href='pesquisa_cid.php'</script>";
 }
 

$cadastro_cid = mysqli_query($conexao, "INSERT INTO `cid` (`cod_cid`, `desc_cid`) 
VALUES ('$cod_cid1', '$desc_cid ');");

// Verificamos se a variavel $cadastro_usuario recebeu TRUE para sucesso no cadastro
if ($cadastro_cid == TRUE){
    echo "<script> alert ('CID cadastrado Sucesso!') </script>";
    echo "<script> location.href='cadastro_cid.php'</script>";
}

// Caso FALSE ou outro damos erro 
else{
    echo "<script> alert ('Não foi possivel Cadastrar a CID!') </script>"; 
    echo "<script> location.href='cadastro_cid.php'</script>";
}

?>