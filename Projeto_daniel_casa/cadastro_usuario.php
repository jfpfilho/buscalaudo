
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
                                                                    <p>CADASTRO DO USUARIO </p>     
                                                                </div>
                                                    </div>
                                                            <br><br>

                                 <form action="processa_cadastro_profissional.php" method="POST">     

                                                    <div class="row">
                                                            <div class="col-md-6">  NOME 
                                                                    <input class="form-control" type="text" name="nome_prof" placeholder="NOME ">
                                                            </div>

                                                            <div class="col-md-3">  Nº CPF
                                                                    <input class="form-control" type="CPF" name="cpf_prof" placeholder="Nº CPF">
                                                            </div>

                                                            <div  class="col-md-3" > <!-- ATENÇÃO ! arrumar essa div -->
                                                                <p >
                                                                        Mas.
                                                                        <input  type="checkbox" id="Mas" name="sexo" valeu="Mas"/>   <!-- class="form-control" já configura e coloca bordas  -->
                                                            
                                                                        Fem.
                                                                        <input  type="checkbox" id="Mas" name="sexo" valeu="Fem"/>
                                                                </p>
                                                            

                                                            </div> 
                                                    </div>
                                                    <br>
                                                                                
                                             <div class="row" > 
                                    

                                           

                                                    <div class="col-md-12" > <!--46 - NOME DO PROFISSIONAL AUTORIZADOR/ 47 - CÓD. ÓRGÃO EMISSOR /48 - DOCUMENTO/49 - Nº DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR/50-DATA DA AUTORIZAÇÃO/51 - ASSINATURA E CARIMBO (Nº DO REGISTRO DO CONSELHO) -->
                                                            <div class="row">
                                                                        <div class="col-md-5">NÍVEL DE ACESSO
                                                                            <input class="form-control" type="text" name="especialidade" placeholder="NÍVEL DE ACESSO">
                                                                        
                                                                        </div>
                                                                        

                                                                        <div class="col-md-3"> LOGIN
                                                                            <input  class="form-control" type="text" name="n_conselho" placeholder="LOGIN">
                                                                        </div>


                                                                        <div class="col-md-4"> SENHA
                                                                            <input  class="form-control" type="password" name="n_cnes" placeholder="SENHA">
                                                                        </div>

                                                                        
                                                            </div>        
                                                            <br>

                                                            
                                                                    
                                                                                        
                                                                              
                                                        
                                                            
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