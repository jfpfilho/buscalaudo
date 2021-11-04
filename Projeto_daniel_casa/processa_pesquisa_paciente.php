
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Pagina Inicial</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="style.css" rel="stylesheet" href="bootstrap.min.css"/>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>

        
        <!--escript de fazer as mascaras -->

        <script>
            function formatar(mascara, documento){
                    var i = documento.value.length;
                    var saida = mascara.substring(0,1);
                    var texto = mascara.substring(i);

                    if (texto.substring(0,1) != saida){

                            documento.value += texto.substring(0,1); 
                    }

            }


        </script>


        <!--type="full" required maxlength="27" OnkeyPress="formatar('#|#|#|#|#|#|#|#|#|#|#|#|#|#', this)"  serve para configura o da maneira que quermos a mascara
        -->
    
    

    </head> <!--  -->

    <body>
         <?php include 'nav_superior.php'?>

            <div style=" height: 75%;  margin-top: 4%;" class="container" >


                        <Div   class="row">

                                        <div   class="container" class="col-sm-12">
                                



                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>CADASTRO DE PACIENTE</p>     
                                                                    </div>
                                                        </div>
                                                                <br>

                                                <form action="***" method="POST">  


                                                        <?php 
                                                        include 'conexao.php';

                                                        $cpf_paciente = $_POST["cpf"];
                                                        $nome_paciente = $_POST["nome"];
                                                        $n_prontuario = $_POST["n_prontuario"];

                                                        $listar_paciente1 = mysqli_query($conexao, "SELECT * FROM paciente");
                                                        $pesquisa1 = mysqli_fetch_assoc($listar_paciente1);
                                                       
                                                        if (($pesquisa1["cpf_paciente"] != $cpf_paciente) || ($pesquisa1["nome_paciente"] != $nome_paciente) || ($pesquisa1["n_prontuario"] != $$n_prontuario) ) 
                                                            {
                                                                echo "<script> alert ('Paciente não possui cadastro, favor cadastrá-lo!') </script>";
                                                                echo "<script> location.href='cadastro_paciente.php'</script>";
                                                            }
                                                       else {

                                                        $listar_paciente = mysqli_query($conexao, "SELECT * FROM `paciente` WHERE `cpf_paciente` 
                                                        LIKE '$cpf_paciente' OR `nome_paciente` LIKE '%$nome_paciente%' OR `n_prontuario` LIKE '$n_prontuario'");

                                                        $pesquisa = mysqli_fetch_assoc($listar_paciente);

                                                            }

                                                       
                                                        // SELECT * FROM caixa INNER JOIN quarto ON caixa.quarto_id_quarto = quarto.id_quarto INNER JOIN cliente ON caixa.cliente_id_cliente = cliente.id_cliente // 



                                                        ?>
   

                                                        <div class="row">
                                                                <div class="col-md-7">  NOME DO PACIENTE
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['nome_paciente']; ?>" >
                                                                </div>
                                                                                    
                                                                                <div class="col-md-2" >

                                                                                    <div>
                                                                                        SEXO
                                                                                        <input class="form-control" value=" <?PHP echo $pesquisa['sexo']; ?>"> <!-- class="form-control" já configura e coloca bordas / checked serve para deixa a opção já marcada -->
                                                                                      
                                                                                    </div>
                                                                                        
                                                                                </div>
                                                                            
                                                                <div class="col-md-3" > Nº DO PRONTUÁRIO
                                                                        <input class="form-control" type="text"  value=" <?PHP echo $pesquisa['n_prontuario']; ?>">
                                                                </div>

                                                        </div>        
                                                        
                                                        
                                                                    <br>

                                                        
                                                        <div class="row" > 
                                                        
                                                                <div class="col-md-2" >N° CPF
                                                                        <input class="form-control" type="text"  value=" <?PHP echo $pesquisa['cpf_paciente']; ?>">      
                                                                </div>

                                                                <div class="col-md-2" >CART. NAC. DE SAÚDE (CNES)
                                                                        <input class="form-control" type="text"   value=" <?PHP echo $pesquisa['n_cnes_paciente']; ?>">      
                                                                </div>

                                                                <div class="col-md-3" > DATA DE NASC.
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['dt_nasc']; ?>">      
                                                                </div>

                                                                <div class="col-md-3" >RAÇA/COR
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['raca_cor']; ?>">
                                                                </div>

                                                                <div class="col-md-2" >ETNIA
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['etnia']; ?>">
                                                                </div>
                                            
                                                        </div>

                                                                    <br>

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-9" > NOME DA MÃE
                                                                <input class="form-control" type="text" value=" <?PHP echo $pesquisa['mae']; ?>">      
                                                            </div>

                                                        <div class="col-md-3" >TELEFONE DE CONTATO
                                                                <input class="form-control"  type="text" value=" <?PHP echo $pesquisa['tel_mae']; ?>">      
                                                            </div>
                                                        
                                                    </div>

                                                                <br>

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-9" > NOME DO RESPONSÁVEL
                                                            <input class="form-control" type="text" value=" <?PHP echo $pesquisa['responsavel']; ?>">      
                                                            </div>

                                                        <div class="col-md-3" >TELEFONE DE CONTATO
                                                            <input class="form-control" type="text" type="text" value=" <?PHP echo $pesquisa['tel_resp']; ?>">      
                                                        </div>
                                                        
                                                    </div>
                                                                <br>

                                                    <div class="row" > 
                                                        
                                                            <div class="col-md-12" > ENDEREÇO (RUA, Nº, BAIRRO)
                                                                <input class="form-control" type="text" value=" <?PHP echo $pesquisa['tel_resp']; ?>">      
                                                            </div>
                                                    </div>

                                                                    <br>


                                                            <div class="row" > 
                                                                
                                                                    <div class="col-md-6" > MUNICÍPIO DE RESIDÊNCIA
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['municipio']; ?>">      
                                                                    </div>

                                                                    <div class="col-md-2" > CÓD. IBGE MUN
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['cod_ibge_municipio']; ?>">      
                                                                    </div>

                                                                    <div class="col-md-1" > UF
                                                                        <input class="form-control" type="text" value=" <?PHP echo $pesquisa['uf']; ?>">
                                                                    </div>

                                                                    <div class="col-md-3" > CEP
                                                                        <input class="form-control" type="text"  value=" <?PHP echo $pesquisa['cep']; ?>">
                                                                    </div>
                            
                                                            </div>
                                                            <br>

                                                            <input type="submit" value="ALTERAR CADASTRO" href="altera_cadastro_paciente.php" class="btn btn-primary"/>
                                                            <br><br>
                                                                <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="height: 4.5%; text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p></p>     
                                                                    </div>
                                                                </div>

                                                </form>  


                                    </div>

                        
                    </div>

        </div>    
    <?php include 'nav_inferior.php'?>   
            
    </body>
</html>