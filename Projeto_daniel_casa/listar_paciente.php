
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Pagina Inicial</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="style.css" rel="stylesheet" href="bootstrap.min.css"/>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>


    </head> <!--  -->

    <body>
         <?php include 'nav_superior.php'?>

            <div style=" height: 60%;  margin-top: 8%;" class="container"  >


            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            
                                            <tr>
                                                <th>Nome</th>
                                                <th>N° CPF</th>
                                                <th>N° Prontuário</th>
                                                <th>Ações</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            
                                        </tfoot>
                                        <tbody>
                                        <?PHP 
                                        include 'conexao.php';

                                        $cpf_paciente = $_POST["cpf"];
                                        $nome_paciente = $_POST["nome"];
                                        $n_prontuario = $_POST["n_prontuario"];

                                        $listar_paciente = mysqli_query($conexao, "SELECT * FROM `paciente` WHERE `cpf_paciente` 
                                        LIKE '$cpf_paciente' OR `nome_paciente` LIKE '$nome_paciente' OR `n_prontuario` LIKE '$n_prontuario'");

                                        $pesquisa = mysqli_fetch_assoc($listar_paciente);

                                        
                                                       
                                        if (($pesquisa["cpf_paciente"] != $cpf_paciente)) 

                                     

                                         {
                                            echo "<script> alert ('Paciente não possui cadastro, favor cadastrá-lo!') </script>";
                                            echo "<script> location.href='cadastro_paciente.php'</script>";
                                        }


                                   
                                        while ($pesquisa = mysqli_fetch_assoc($listar_paciente)  ){ ?>

                                    pre
                                        
                                        
                                            <tr>
                                                <td><?PHP echo $pesquisa['nome_paciente']; ?></td>
                                                <td><?PHP echo $pesquisa1['cpf_paciente']; ?></td>
                                                <td><?PHP echo $pesquisa1['n_prontuario'];?></td>

                                  
                                                
                                                <td><?PHP echo 
                                                        "<form action='alterar_cliente1F.php' method='POST'>
                                                            <button name='id_cliente_alterar'value=".$pesquisa['cpf_paciente'].">Altera  </button>
                                                        </form> ";
                                                        echo "<form action='processa_excluir_cliente1B.php' method='POST'>
                                                        <button name='id_cliente_excluir'value=".$pesquisa['cpf_paciente']." >Excluir </button>
                                                        </form> ";?></td>
                                                
                                            </tr>
                                        <?PHP } ?>
                                            
                                        </tbody>
                                    </table>

        </div>    
    <?php include 'nav_inferior.php'?>   
            
    </body>
</html>