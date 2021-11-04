
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

            <div style=" height: 70%;  margin-top: 15%;" class="container" >


                        <Div   class="row">

                                        <div   class="container" class="col-sm-12">
                                



                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>PESQUISAR CADASTRO DE PACIENTE</p>     
                                                                    </div>
                                                        </div>
                                                                <br>

                                                <form action="listar_paciente.php" method="POST">     

                                                        <div class="row">
                                                                <div class="col-md-6">  NOME DO PACIENTE
                                                                        <input class="form-control" type="text" name="nome" placeholder="3 - NOME DO PACIENTE">
                                                                </div>

                                                                <div class="col-md-3" >N° CPF
                                                                        <input class="form-control" type="text" name="cpf" placeholder="CPF">      
                                                                </div>
                                                                                    
                                                                              
                                                                            
                                                                <div class="col-md-3" > Nº DO PRONTUÁRIO
                                                                        <input class="form-control" type="text" name="n_prontuario" placeholder="Nº DO PRONTUÁRIO">
                                                                </div>

                                                        </div>  

                                                        <br><br>      
                                                        
                                                        

                                                            <input type="submit" value="PESQUISAR" class="btn btn-primary"/>
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