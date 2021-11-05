
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Cadastro Cid</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>  <!-- asset indica a pasta onde está o aquivo-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  

    </head> <!--  -->

    <body>
       

            <div style=" height: 60%;  margin-top: 8%;" class="container"  >


                        <div   class="row">

                                <div   class="container" class="col-sm-12">
                                



                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>CADASTRO DO CID</p>     
                                                                    </div>
                                                        </div>
                                                                <br><br>

                                     <form action="{{route('cid.store')}}" method="POST">     
                                        @csrf
                                     <div class="row" > 
                                        
                                        <div class="col-md-9" >NOME / DESCRIÇÃO
                                                <input class="form-control" type="text" name="nome_desc_cid" placeholder="NOME / DESCRIÇAO">   
                                            </div>   
                                        

                                                <div class="col-md-3" >  COD. CID 
                                                        <input class="form-control" type="text" name="cod" placeholder="COD. CID">      
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
       
            
    </body>
</html>