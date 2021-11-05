
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Cadastro Profissional</title> <!-- Navbar parte de navegação completa de um site-->
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
                                                                        <p>CADASTRO DE PROFISSIONAL / SOLICITANTE</p>     
                                                                    </div>
                                                        </div>
                                                                <br><br>

                                     <form action="{{route('profissional.store')}}" method="POST">     
                                            @csrf
                                                        <div class="row">
                                                                <div class="col-md-6">  NOME DO PROFISSIONAL
                                                                        <input class="form-control" type="text" name="nome_prof" placeholder="NOME DO PROFISSIONAL">
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
                                                                            <div class="col-md-5">ESPECIALIDADE
                                                                                <input class="form-control" type="text" name="especialidade" placeholder="20 - ESPECIALIDADE">
                                                                            
                                                                            </div>
                                                                            

                                                                            <div class="col-md-3"> Nº DO CONSELHO
                                                                                <input  class="form-control" type="text" name="n_conselho" placeholder="º DO CONSELHO">
                                                                            </div>


                                                                            <div class="col-md-4"> Nº DOCUMENTO CNES
                                                                                <input  class="form-control" type="number" name="n_cnes" placeholder="Nº DOCUMENTO CNS">
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
            
    </body>
</html>