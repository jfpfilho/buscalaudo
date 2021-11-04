
<html>

    <head> 
    <meta charset="utf-8"/>
        
    <title>CADASTRO PACIENTE</title> <!-- Navbar parte de navegação completa de um site-->
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
   
            <div style=" height: 75%;  margin-top: 4%;" class="container" >


                        <Div   class="row">

                                        <div   class="container" class="col-sm-12">
                                

                                                        <div class="row"  > 
                                                                    
                                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                        <p>CADASTRO DE PACIENTE</p>     
                                                                    </div>
                                                        </div>
                                                                <br>

                                                <form action="{{route('paciente.store')}}" method="post">     
                                                    @csrf
                                                        <div class="row">
                                                                <div class="col-md-7">  NOME DO PACIENTE
                                                                        <input class="form-control" type="text" name="nome_paciente" placeholder="3 - NOME DO PACIENTE">
                                                                </div>
                                                                                    
                                                                                <div class="col-md-2" >

                                                                                    <div>
                                                                                        Mas.
                                                                                        <input  checked type="checkbox" id="Mas" name="sexo" valeu="Mas"/> <!-- class="form-control" já configura e coloca bordas / checked serve para deixa a opção já marcada -->
                                                                                                                            
                                                                                        Fem.
                                                                                        <input  type="checkbox" id="Mas" name="sexo" valeu="Fem"/>
                                                                                    </div>
                                                                                        
                                                                                </div>
                                                                            
                                                                <div class="col-md-3" > Nº DO PRONTUÁRIO
                                                                        <input class="form-control" type="text" name="n_prontuario" placeholder="Nº DO PRONTUÁRIO">
                                                                </div>

                                                        </div>        
                                                        
                                                        
                                                                    <br>

                                                        
                                                        <div class="row" > 
                                                        
                                                                <div class="col-md-2" >N° CPF
                                                                        <input class="form-control" type="text" name="cpf_paciente" placeholder="CPF">      
                                                                </div>

                                                                <div class="col-md-2" >CART. NAC. DE SAÚDE (CNES)
                                                                        <input class="form-control" type="text"  name="n_cnes_paciente" placeholder="CARTÃO NACIONAL DE SAÚDE (CNS)">      
                                                                </div>

                                                                <div class="col-md-3" > DATA DE NASC.
                                                                        <input class="form-control" type="date" name="dt_nasc_paciente" placeholder="DATA DE NASCIMENTO">      
                                                                </div>

                                                                <div class="col-md-3" >RAÇA/COR
                                                                        <input class="form-control" type="text" name="raca" placeholder="RAÇA/COR">
                                                                </div>

                                                                <div class="col-md-2" >ETNIA
                                                                        <input class="form-control" type="text" name="etnia" placeholder="ETNIA">
                                                                </div>
                                            
                                                        </div>

                                                                    <br>

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-9" > NOME DA MÃE
                                                                <input class="form-control" type="text" name="mae" placeholder="NOME DA MÃE">      
                                                            </div>

                                                        <div class="col-md-3" >TELEFONE DE CONTATO
                                                                <input class="form-control"  type="text" name="tel_mae" required maxlength="14" OnkeyPress="formatar('## #-####-####', this)" placeholder="TELEFONE DE CONTATO">      
                                                            </div>
                                                        
                                                    </div>

                                                                <br>

                                                    <div class="row" > 
                                                        
                                                        <div class="col-md-9" > NOME DO RESPONSÁVEL
                                                            <input class="form-control" type="text" name="responsavel" placeholder="NOME DO RESPONSÁVEL">      
                                                            </div>

                                                        <div class="col-md-3" >TELEFONE DE CONTATO
                                                            <input class="form-control" type="text" type="text" name="tel_resp" required maxlength="14" OnkeyPress="formatar('## #-####-####', this)" placeholder="TELEFONE DE CONTATO">      
                                                        </div>
                                                        
                                                    </div>
                                                                <br>

                                                    <div class="row" > 
                                                        
                                                            <div class="col-md-12" > ENDEREÇO (RUA, Nº, BAIRRO)
                                                                <input class="form-control" type="text" name="end" placeholder="ENDEREÇO (RUA, Nº, BAIRRO">      
                                                            </div>
                                                    </div>

                                                                    <br>


                                                            <div class="row" > 
                                                                
                                                                    <div class="col-md-6" > MUNICÍPIO DE RESIDÊNCIA
                                                                        <input class="form-control" type="text" name="municipio" placeholder="MUNICÍPIO DE RESIDÊNCIA">      
                                                                    </div>

                                                                    <div class="col-md-2" > CÓD. IBGE MUN
                                                                        <input class="form-control" type="number" name="n_ibge_mun" placeholder="CÓD. IBGE MUNICÍPIO">      
                                                                    </div>

                                                                    <div class="col-md-1" > UF
                                                                        <input class="form-control" type="text" name="uf" placeholder="UF">
                                                                    </div>

                                                                    <div class="col-md-3" > CEP
                                                                        <input class="form-control" type="text" name="cep" required maxlength="10" OnkeyPress="formatar('##.###-###', this)" placeholder="CEP">
                                                                    </div>
                            
                                                            </div>
                                                            <br>
                                                            <button type="submit"  class="btn btn-primary">CADASTRAR</button>
                                                           <!-- <input type="submit" value="CADASTRAR" class="btn btn-primary"/>-->
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