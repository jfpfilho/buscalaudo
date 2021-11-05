
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Cadastro Procedimentos</title> <!-- Navbar parte de navegação completa de um site-->
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
                                                                        <p>CADASTRO DE PROCEDIMENTOS</p>     
                                                                    </div>
                                                        </div>
                                                                <br><br>

                                     <form action="{{route('procedimentos.store')}}" method="POST">     
                                        @csrf
                                     <div class="row" > 
                                        
                                        <div class="col-md-4" >CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                <input class="form-control" type="number" name="cod_proc" placeholder="CÓD. DO PROCEDIMENTO">   
                                            </div>   
                                        

                                                <div class="col-md-8" > NOME DO PROCEDIMENTO 
                                                        <input class="form-control" type="text" name="nome_proc" placeholder="NOME DO PROCEDIMENTO">      
                                                </div>

                                                        
                                    
                        
                                    </div>

                                    <br>


                                    <div class="row">

                                        <div class="col-md-12" >DESCRIÇÃO DO PROCEDIMENTO
                                            <textarea class="form-control" name="desc_proc" id="" cols="0" rows="0" placeholder="DESCRIÇÃO DO PROCEDIMENTO"></textarea>
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