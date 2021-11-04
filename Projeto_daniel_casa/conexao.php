
<?PHP
$servidor = "localhost";
$user_servidor = "root";
$senha_servidor = "";
$banco = "daniel";

$conexao = mysqli_connect($servidor,$user_servidor,$senha_servidor,$banco);

if ($conexao == TRUE) {

   // echo "Conectado ao ".$banco;
}

    else {
        echo "Não conectado";
    }

?>