
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

            <div class="login" class="container-fluid">


            


                <Div class="row">

                        <div class="login1" class="container" class="col-sm-12">

                        
                        <div  class="row"  > 
                                                                    
                            <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                <p>LOGIN</p>     
                            </div>
                        </div>

                        <br><br>

                        
                        



                                    <form method="POST" action=""> <!--  -->
                                                <div class="form-group"> <!-- class="form-group" já deixa cada grupo de configurado  -->
                                                    E-mail:<br/>
                                                    <input type="email" name="email" class="form-control"/><br/><br/> <!-- class="form-control" já configura e coloca bordas  -->
                                                </div>

                                                <div class="form-group">
                                                    Senha:<br/>
                                                    <input type="passeord" name="senha" class="form-control"/><br/><br/>
                                                </div>    

                                                <input type="submit" value="ENTRAR" class="btn btn-primary"/> <!-- class="btn btn-default" já deixa o botão bem configurado -->


                                    
                                    </form>
                                    <br>

                                                             <div class="row"  > 
                                                                    
                                                                <div  class="col-md-12" style="height: 4.2%; text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                    <p></p>     
                                                                </div>
                                                            </div>

                        
                                    
                                
                            </div>



                </Div>

                    
            
            
            </div>

                    
                
            <?php include 'nav_inferior.php'?>   
    </body>
</html>