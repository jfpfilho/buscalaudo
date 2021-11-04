<?php
// include inclui todo o código que estiver no arquivo conexao.php
include 'conexao.php';
// variaveis para receber dados que vem da outra página
$cpf_paciente = $_POST["cpf_paciente"];
$nome_paciente = $_POST["nome_paciente"];
$mae = $_POST["mae"];
$responsavel = $_POST["responsavel"];
$sexo = $_POST["sexo"];
$n_prontuario = $_POST["n_prontuario"];
$tel_resp = $_POST["tel_resp"];
$endereço = $_POST["end"];
$municipio = $_POST["municipio"];
$cod_ibge_municipio = $_POST["n_ibge_mun"];
$uf = $_POST["uf"];
$cep = $_POST["cep"];
$n_cnes_paciente = $_POST["n_cnes_paciente"];
$dt_nasc = $_POST["dt_nasc_paciente"];
$tel_mae = $_POST["tel_mae"];
$etnia = $_POST["etnia"];
$raca_cor = $_POST["raca"];



// Usamos variavel $cadastro_usuario para receber TRUE ou FALSE da sintase SQL
                  // mysqli_query função para executar script sql
                                //$conexao é a variavel de conexao do arquivo conexao.php 
 $listar_cliente = mysqli_query($conexao, "SELECT * FROM `paciente`");
 $pesquisa = mysqli_fetch_assoc($listar_cliente);

 if ($pesquisa["cpf_paciente"] == $cpf_paciente)
 {
    echo "<script> alert ('Paciente já possui cadastro!') </script>";
    echo "<script> location.href='pesquisa_paciente.php'</script>";
 }
 

$cadastro_usuario = mysqli_query($conexao, "INSERT INTO `paciente` (`cpf_paciente`, `nome_paciente`, `mae`, `responsavel`, `sexo`, `n_prontuario`, `tel_resp`, `endereço`, `municipio`, `cod_ibge_municipio`, `uf`, `cep`, `n_cnes_paciente`, `dt_nasc`, `tel_mae`, `etnia`, `raca_cor`) 
VALUES ('$cpf_paciente', '$nome_paciente ', '$mae ', '$responsavel', '$sexo', '$n_prontuario', '$tel_resp', '$endereço', '$municipio ', '$cod_ibge_municipio', '$uf', '$cep', '$n_cnes_paciente', '$dt_nasc', '$tel_mae', '$etnia', '$raca_cor');");

// Verificamos se a variavel $cadastro_usuario recebeu TRUE para sucesso no cadastro
if ($cadastro_usuario == TRUE){
    echo "<script> alert ('Paciente cadastrado Sucesso!') </script>";
    echo "<script> location.href='cadastro_paciente.php'</script>";
}

// Caso FALSE ou outro damos erro 
else{
    echo "<script> alert ('Não foi possivel Cadastrar o cliente!') </script>"; 
    echo "<script> location.href='pesquisa_paciente.php'</script>";
}

?>