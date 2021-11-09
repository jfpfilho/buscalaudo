
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Listar Paciente</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>  <!-- asset indica a pasta onde está o aquivo-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>



    </head> <!--  -->

    <body>
    
        <div style=" height: 60%;  margin-top: 8%;" class="container"  >


                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>  <!--utilizado para destacar os títulos das colunas de uma tabela. ... A cada página de impressão o cabeçalho se repetirá.-->
                                            
                                                <tr><!--  define uma linha numa tabela. A tabela terá exactamente um número de linhas igual ao número de tags TR encontradas. -->
                                                @foreach ($pacientes as $paciente)    
                                                <th>Nome {{$paciente->nome_paciente}}</th>
                                                    <th>N° CPF {{$paciente->cpf_paciente}}</th>
                                                                                                        
                                                </tr>
                                        </thead>
                                        <tfoot> <!-- para combinar conteúdo rodapé da tabela HTML. ... Quando incluídas várias páginas longas mesas são impressos,
                                         os cabeçalhos e rodapés de tabelas pode ser impresso em cada página que contém os dados da tabela. -->
                                            
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
                                           

                                  
                                                
                                                <td> <?PHP echo 
                                                                "<form action='alterar_cliente1F.php' method='POST'>
                                                                    <button name='id_cliente_alterar'value=".$pesquisa['cpf_paciente'].">VER  </button>
                                                                </form> ";
                                                                
                                                                "<form action='alterar_cliente1F.php' method='POST'>
                                                                <button name='id_cliente_alterar'value=".$pesquisa['cpf_paciente'].">EXCLUIR  </button>
                                                                </form> ";
                                                                echo "<form action='processa_excluir_cliente1B.php' method='POST'>
                                                                <button name='id_cliente_excluir'value=".$pesquisa['cpf_paciente']." >Excluir </button>
                                                                </form> ";
                                                                
                                                    ?>
                                                        
                                                </td>
                                                
                                            </tr>
                                        <?PHP } ?>
                                            
                                        </tbody>
            </table>

        </div>    
   
    </body>
</html>