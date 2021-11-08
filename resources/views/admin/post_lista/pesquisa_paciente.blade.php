
<html>


    <head> 
    <meta charset="utf-8"/>
        
    <title> Pesquisa Paciente</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>  <!-- asset indica a pasta onde está o aquivo-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

        
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
        
            <div style=" height: 70%;  margin-top: 15%;" class="container" >


                        <Div   class="row">

                                        <div   class="container" class="col-sm-12">
                                



                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>PESQUISAR CADASTRO DE PACIENTE</p>     
                                                                    </div>
                                                        </div>
                                                                <br>

                                                <form action="{{route('paciente')}}" method="GET">     
                                                @csrf
                                                        <div class="row">
                                                                <div class="col-md-6">  NOME DO PACIENTE
                                                                        <input class="form-control" type="text" name="nome" placeholder="3 - NOME DO PACIENTE">
                                                                </div>

                                                                <div class="col-md-3" >N° CPF
                                                                        <input class="form-control" type="text" name="cpf" placeholder="CPF">      
                                                                </div>
                                                                                    
                                                                              
                                                                            
                                                                <div class="col-md-3" > NOME DA MÃE
                                                                        <input class="form-control" type="text" name="n_prontuario" placeholder="NOME DA MÃE">
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
   
            
    </body>
</html>