
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


                        <div   class="row">

                                <div   class="container" class="col-sm-12">
                                



                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>CADASTRO DO ESTABELECIMENTO</p>     
                                                                    </div>
                                                        </div>
                                                                <br><br>

                                     <form action="processa_cadastro_emp_executante.php" method="POST">     

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-9" >NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE
                                                            <input class="form-control" name="nome_fant" type="text" placeholder="NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE">      
                                                        </div>

                                                                <div class="col-md-3" >n° CNES
                                                                    <input class="form-control" name="cnes_est" type="number" placeholder="CNES">      
                                                                </div>

                                                    </div>  

                                                    <br>

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-8" >NOME ESTABELECIMENTO DE SAÚDE EXECUTANTE
                                                            <input class="form-control" type="text" name="empresa" placeholder="NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE">      
                                                        </div>

                                                        <div class="col-md-4" >n° CNPJ
                                                            <input class="form-control" name="cnpj" type="number" placeholder="CNPJ">      
                                                        </div>

                                                    </div>           
                                                            <br> <br>

                                                            <input type="submit" value="CADASTRAR" class="btn btn-primary"/>
                                                            <br> <br>

                                                            <div class="row"  > 
                                                                    
                                                                <div  class="col-md-12" style="height: 5%; text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
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