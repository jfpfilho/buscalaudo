<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"/>
        
        <title> laudo</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="style.css" rel="stylesheet" href="bootstrap.min.css"/>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <!--

        escript de fazer as mascaras 

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


        type="full" required maxlength="27" OnkeyPress="formatar('#|#|#|#|#|#|#|#|#|#|#|#|#|#', this)"  serve para configura o da maneira que quermos a mascara
        -->
    

    </head> <!-- style="background-color:#2E8B57" -->
<body  >
<?php include 'nav_superior.php'?>
<div class="container btn-md" >
                <div class="container"  >
                    
                <form action="">
                    <div   class="row">



                                    
                                   
                                    <div class="row"  > 

                                            <div class="col-md-4">

                                                <div class="row">

                                                    <div  class="col-md-4" style=" border-color:#DCDCDC; text-align: center; border-radius: black  1%; color:black" >
                                                    <h1 class="img-responsive " style=" text-align: center"><img  src="logosus4.png" /></h1>    
                                                    </div>

                                                    <div  class="col-md-4" style=" border-color: black; text-align: center; margin-top: 10%; color:black" >
                                                        <p>SISTEMA ÚNICO DE SAÚDE</p>     
                                                    </div>

                                                    <div  class="col-md-4" style=" border-color: black; text-align: center; border-radius: black  1%; color:black ; margin-top: 10%" >
                                                        <p>MINISTÉRIO DA SAÚDE</p>     
                                                    </div>
                                                    
                                                </div>

                                                    


                                            </div>

                                            <div class="col-md-8">

                                            <div class="row">

                                                        <div class="col-md-12">
                                                                <p style=" text-align: center; margin-left: 0% ; Font-size: 170% ; margin-top: 5%">LAUDO PARA SOLICITÇÃO/AUTORIZAÇÃO DE PROCEDIMENTOS AMBULATORIAL</p> 
                                                            
                                                        </div>
                                                
                                            </div>

                                                    
                                            </div>
                                                        
                                                       

                                                                       
                                    </div>

                                                    <br>

                                            <div class="row"  > 
                                                        
                                                <div class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white; align-items: center;" >
                                                    <p>IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (SOLICITANTE)</p>     
                                                </div>
                                            </div>

                                                    <br>

                                        
                                            <div class="row" > 
                                                    
                                                    <div class="col-md-10" > 1 - NOME DO ESTABELECIMENTO DE SAÚDE SOLICITANTE
                                                            <input class="form-control" type="text" placeholder="NOME DO ESTABELECIMENTO DE SAÚDE SOLICITANTE">      
                                                        </div>

                                                    <div class="col-md-2" >2 - CNES
                                                            <input class="form-control" type="number" placeholder="CNES" required maxlength="6">    <!-- maxlength="6" quantidade maxima de números -->
                                                    </div>
                                    
                                            </div>


                                        <br>
                        
                                        <div class="row"  > 
                                                    
                                                    <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                        <p>IDENTIFICAÇÃO DO PACIENTE</p>     
                                                    </div>
                                        </div>
                                                <br>

                                        <div class="row">
                                                <div class="col-md-7"> 3 - NOME DO PACIENTE
                                                        <input class="form-control" type="text" placeholder="3 - NOME DO PACIENTE">
                                                </div>
                                                                    
                                                                <div class="col-md-2" >

                                                                    <div>
                                                                        Mas.
                                                                        <input  checked type="checkbox" id="Mas" name="sexo" valeu="Mas"/> <!-- class="form-control" já configura e coloca bordas / checked serve para deixa a opção já marcada -->
                                                                                                            
                                                                        Fem.
                                                                        <input  type="checkbox" id="Mas" name="sexo" valeu="Fem"/>
                                                                    </div>
                                                                        
                                                                </div>
                                                            
                                                <div class="col-md-3" >5 - Nº DO PRONTUÁRIO
                                                        <input class="form-control" type="text" placeholder="Nº DO PRONTUÁRIO">
                                                </div>

                                        </div>        
                                        
                                        
                                                    <br>

                                        
                                        <div class="row" > 
                                        
                                        <div class="col-md-6" >6 - CARTÃO NACIONAL DE SAÚDE (CNS)
                                                <input class="form-control" type="text" placeholder="CARTÃO NACIONAL DE SAÚDE (CNS)">      
                                        </div>

                                        <div class="col-md-2" >7 - DATA DE NASC.
                                                <input class="form-control" type="date" placeholder="DATA DE NASCIMENTO">      
                                        </div>

                                        <div class="col-md-2" >8 - RAÇA/COR
                                                <input class="form-control" type="text" placeholder="RAÇA/COR">
                                        </div>

                                        <div class="col-md-2" >8.1 - ETNIA
                                                <input class="form-control" type="text" placeholder="ETNIA">
                                        </div>
                            
                                    </div>

                                                    <br>

                                    <div class="row" > 
                                        
                                        <div class="col-md-9" >9 - NOME DA MÃE
                                                <input class="form-control" type="text" placeholder="NOME DA MÃE">      
                                            </div>

                                        <div class="col-md-3" >10 - TELEFONE DE CONTATO
                                                <input class="form-control" type="tel" placeholder="TELEFONE DE CONTATO">      
                                            </div>
                                        
                                    </div>

                                                <br>

                                    <div class="row" > 
                                        
                                        <div class="col-md-9" >11 - NOME DO RESPONSÁVEL
                                                <input class="form-control" type="text" placeholder="NOME DO RESPONSÁVEL">      
                                            </div>

                                        <div class="col-md-3" >12 - TELEFONE DE CONTATO
                                                <input class="form-control" type="tel" placeholder="TELEFONE DE CONTATO">      
                                        </div>
                                        
                                    </div>
                                                <br>

                                    <div class="row" > 
                                        
                                            <div class="col-md-12" > 13 - ENDEREÇO (RUA, Nº, BAIRRO)
                                                <input class="form-control" type="text" placeholder="ENDEREÇO (RUA, Nº, BAIRRO">      
                                            </div>
                                    </div>

                                                    <br>


                                            <div class="row" > 
                                                
                                                <div class="col-md-7" >14 - MUNICÍPIO DE RESIDÊNCIA
                                                                <input class="form-control" type="number" placeholder="MUNICÍPIO DE RESIDÊNCIA">      
                                                </div>

                                                        <div class="col-md-2" >15 - CÓD. IBGE MUN
                                                                        <input class="form-control" type="number" placeholder="CÓD. IBGE MUNICÍPIO">      
                                                        </div>

                                                                <div class="col-md-1" >16 - UF
                                                                                <input class="form-control" type="text" placeholder="UF">
                                                                </div>

                                                                        <div class="col-md-1" >17 - CEP
                                                                                        <input class="form-control" type="number" placeholder="CEP">
                                                                        </div>

                                            
                                
                                            </div>
            
                                    
                                                    <br>


                                    <div class="row"  > 
                                        
                                            <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                <p>PROCEDIMENTOS SOLICITADOS</p>     
                                            </div>
                                    </div>


                                            <br>

                                        <div class="row" > 
                                        
                                                <div class="col-md-4" >18 - CÓDIGO DO PROCEDIMENTO PRINCIPAL
                                                    <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO PRINCIPAL">      
                                                </div>

                                                        <div class="col-md-6" >19 - NOME DO PROCEDIMENTO PRINCIPAL
                                                            <input class="form-control" type="number" placeholder="NOME DO PROCEDIMENTO PRINCIPAL">      
                                                        </div>

                                                                <div class="col-md-2" >20 - QTDE.
                                                                    <input class="form-control" type="number" placeholder="20 - QTDE">
                                                                </div>
                                        
                            
                                    </div>

                                                    <br>

                                    <div class="row"  > 
                                        
                                            <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                <p>PROCEDIMENTOS(S) SECUNDÁRIOS(S)</p>     
                                            </div>

                                    </div>

                                                        <br>
                        
                                    <div class="row" > 
                                        
                                        <div class="col-md-4" >21 - CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO SECUNDARIO">   
                                            </div>   
                                        

                                                <div class="col-md-6" >22 - NOME DO PROCEDIMENTO SECUNDÁRIO
                                                        <input class="form-control" type="text" placeholder="NOME DO PROCEDIMENTO SECUNDARIO">      
                                                </div>

                                                        <div class="col-md-2" >23 - QTDE.
                                                                <input class="form-control" type="number" placeholder="20 - QTDE">
                                                        </div>
                                    
                        
                                    </div>


                                                    <br>
                                        
                                        
                                        <div class="row" > 
                                        
                                                <div class="col-md-4" >24 - CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                    <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO SECUNDARIO">      
                                                </div>

                                                        <div class="col-md-6" >25 - NOME DO PROCEDIMENTO SECUNDÁRIO
                                                            <input class="form-control" type="text" placeholder="NOME DO PROCEDIMENTO SECUNDARIO">      
                                                        </div>

                                                                <div class="col-md-2" >26 - QTDE.
                                                                    <input class="form-control" type="number" placeholder="20 - QTDE">
                                                                </div>
                                        
                            
                                    </div>

                                                <br>

                                    
                                    <div class="row" > 
                                        
                                        <div class="col-md-4" >27 - CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO SECUNDARIO">      
                                        </div>

                                                <div class="col-md-6" >28 - NOME DO PROCEDIMENTO SECUNDÁRIO
                                                        <input class="form-control" type="text" placeholder="NOME DO PROCEDIMENTO SECUNDARIO">      
                                                </div>

                                                        <div class="col-md-2" >29 - QTDE.
                                                                <input class="form-control" type="number" placeholder="20 - QTDE">
                                                        </div>
                                    
                        
                                        </div>

                                                        <br>
                                    
                                    
                                    <div class="row" > 
                                        
                                        <div class="col-md-4" >30 - CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO SECUNDARIO">      
                                        </div>

                                                <div class="col-md-6" >31 - NOME DO PROCEDIMENTO SECUNDÁRIO
                                                        <input class="form-control" type="text" placeholder="NOME DO PROCEDIMENTO SECUNDARIO">      
                                                </div>

                                                        <div class="col-md-2" >32 - QTDE.
                                                                <input class="form-control" type="number" placeholder="20 - QTDE">
                                                        </div>
                                    
                        
                                    </div>

                                                        <br>

                                <div class="row" > 
                                        
                                        <div class="col-md-4" >33 - CÓDIGO DO PROCEDIMENTO SECUNDÁRIO
                                                <input class="form-control" type="number" placeholder="CÓDIGO DO PROCEDIMENTO SECUNDARIO">      
                                        </div>

                                                <div class="col-md-6" >34 - NOME DO PROCEDIMENTO SECUNDÁRIO
                                                        <input class="form-control" type="text" placeholder="NOME DO PROCEDIMENTO SECUNDARIO">      
                                                </div>

                                                        <div class="col-md-2" >35 - QTDE.
                                                                <input class="form-control" type="number" placeholder="20 - QTDE">
                                                        </div>
                                    
                        
                                </div>


                                                <br>

                                <div class="row"  > 
                                        
                                            <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                <p>JUSTIFICATIVA DOS(S) PROCEDIMENTOS(S) SOLICITADOS(S)</p>     
                                            </div>
                                </div>

                                                    <br>

                                            <div class="row" > 
                                        
                                                    <div class="col-md-5" >36 - DESCRIÇÃO DO DIAGNÓSTICO
                                                        <input class="form-control" type="text" placeholder="DESCRIÇÃO DO DIAGNÓSTICO">      
                                                    </div>

                                                            <div class="col-md-2" >37-CID10 PRINCIPAL
                                                                <input class="form-control" type="text" placeholder="CID10 PRINCIPAL">      
                                                            </div>

                                                                    <div class="col-md-2" >38-CID10 SECUNDÁRIO
                                                                        <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                    </div>

                                                                            <div class="col-md-3" >39-CID10 CAUSAS ASSOCIADAS
                                                                                <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                            </div>

                                            </div>

                                                                    <br>

                                                                    <div class="row" >
                                        
                                                                        <div  class="col-md-12">40 - OBSERVAÇÕES
                                                                            <textarea class="form-control" placeholder="OBSERVAÇÕES" name="" id="" ></textarea>    
                                                                        </div>
                                                                    </div>

                                                                    <br>

                                                    <div class="row"  > 
                                                    
                                                        <div class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white">
                                                            <p>SOLICITAÇÃO</p>     
                                                        </div>
                                                </div>

                                            <br>


                                <!-- bloco de autorização, foi feito duas div row uma de 8 e outra de 4-->

                                        <div class="row" > 
                                        
                                            <div class="col-md-12" >

                                                <div class="row">

                                                            <div class="col-md-8" > <!--46 - NOME DO PROFISSIONAL AUTORIZADOR/ 47 - CÓD. ÓRGÃO EMISSOR /48 - DOCUMENTO/49 - Nº DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR/50-DATA DA AUTORIZAÇÃO/51 - ASSINATURA E CARIMBO (Nº DO REGISTRO DO CONSELHO) -->
                                                                    <div class="row">
                                                                                <div class="col-md-8">41 - NOME DO PROFISSIONAL SOLICITANTE
                                                                                    <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                
                                                                                </div>
                                                                                

                                                                                <div class="col-md-4"> 42-DATA DA SOLICITAÇÃO
                                                                                    <input  class="form-control" type="DATE" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                </div>
                                                                    </div>        
                                                                                        <br>
                                                                            
                                                                                                
                                                                                        <div class="row">
                                                                                            <div class="col-md-3">43 - DOCUMENTO 
                                                                                                <div class="row">

                                                                                                        <div  class=" col-md-12" >
                                                                                                                    CNS
                                                                                                                <input  checked type="checkbox" id="Mas" name="sexo" valeu="Mas"/>

                                                                                                                    CPF

                                                                                                                <input  type="checkbox" id="Mas" name="sexo" valeu="Mas"/>

                                                                                                        </div>
                                                                                                  

                                                                                                </div>

                                                                                                       
                                                                                            </div>
                                                                                            <div class="col-md-9">44 - Nº DOCUMENTO (CNS/CPF) DO PROFISSIONAL SOLICITANTE
                                                                                                <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                            </div>

                                                                                        </div>
                                                                
                                                                    
                                                            </div>
                                                        

                                                                        <div  class="col-md-4" >
                                                                            <div class="row">
                                                                                    <div  class="col-md-12">45-ASSINATURA E CARIMBO (Nº REGISTRO DO CONSELHO

                                                                                        <div > 
                                                                                            
                                                                                            <pre>


                                                                                            </pre>  
                                                                                        
                                                                                        </div>
                                                                                    </div>

                                                                                    
                                                                                    
                                                                            
                                                                            </div>
                                                                            
                                                                        </div>

                                                </div>

                                                        


                                                                    
                                            </div>

                                                    
                            
                                    </div> <br>

                                            <div class="row"  > 
                                                    
                                                        <div class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white">
                                                            <p>AUTORIZAÇÃO</p>     
                                                        </div>
                                            </div>

                                            <br>


                                <!-- bloco de autorização, foi feito duas div row uma de 8 e outra de 4-->

                                        <div class="row" > 
                                        
                                            <div class="col-md-12" >

                                                <div class="row">

                                                            <div class="col-md-8" > <!--46 - NOME DO PROFISSIONAL AUTORIZADOR/ 47 - CÓD. ÓRGÃO EMISSOR /48 - DOCUMENTO/49 - Nº DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR/50-DATA DA AUTORIZAÇÃO/51 - ASSINATURA E CARIMBO (Nº DO REGISTRO DO CONSELHO) -->
                                                                    <div class="row">
                                                                                <div class="col-md-8"> 46 - NOME DO PROFISSIONAL AUTORIZADOR
                                                                                    <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                
                                                                                </div>
                                                                                

                                                                                <div class="col-md-4"> 47 - CÓD. ÓRGÃO EMISSOR
                                                                                    <input  class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                </div>
                                                                    </div>        
                                                                                        <br>
                                                                                <div class="row">
                                                                                    <div class="col-md-4">48 - DOCUMENTO
                                                                                    <div class="row">

                                                                                                <div  class=" col-md-12"  >
                                                                                                            CNS
                                                                                                        <input  checked type="checkbox" id="Mas" name="sexo" valeu="Mas"/>

                                                                                                            CPF

                                                                                                        <input  type="checkbox" id="Mas" name="sexo" valeu="Mas"/>

                                                                                                </div>


                                                                                                </div>
                                                                                    </div>

                                                                                    <div class="col-md-8">49 - Nº DOCUMENTO (CNS/CPF) DO PROFISSIONAL AUTORIZADOR
                                                                                        <input class="form-control" placeholder="20 - CID10 SECUNDÁRIO"  > 
                                                                                    </div>
                                                                                </div>    
                                                                                                <br>
                                                                                        <div class="row">
                                                                                            <div class="col-md-2">50-DATA 
                                                                                                <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                            </div>
                                                                                            <div class="col-md-10">51 - ASSINATURA E CARIMBO (Nº DO REGISTRO DO CONSELHO)
                                                                                                <input class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                            </div>

                                                                                        </div>
                                                                
                                                                    
                                                            </div>
                                                        

                                                                        <div  class="col-md-4" >
                                                                            <div class="row">
                                                                                    <div  class="col-md-12"> Nº DA AUTORIZAÇÃO

                                                                                        <div  > 
                                                                                            
                                                                                            <pre>



                                                                                            </pre>  
                                                                                        
                                                                                        </div>
                                                                                    </div>

                                                                                
                                                                            
                                                                                        <div class="row">
                                                                                            <div  class="col-md-12">53 - PERÍODO DE VALIDADE DA APAC
                                                                                                <input  class="form-control" type="text" placeholder="20 - CID10 SECUNDÁRIO">
                                                                                            </div>
                                                                                        </div>
                                                                            
                                                                            </div>
                                                                            
                                                                        </div>

                                                </div>

                                                        


                                                                    
                                            </div>

                                                    
                            
                                    </div> <br>

                                                        <div class="row"> 
                                                            
                                                            <div  class="col-md-12" style="text-align: center; background-color: #2F4F4F; border-radius: 1%; color:white" >
                                                                    <p>IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (EXECUTANTE)</p>     
                                                            </div>
                                                        </div>

                                                        <br>
                                                

                                            <div class="row" > 
                                        
                                                <div class="col-md-9" > 54 – NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE
                                                    <input class="form-control" type="number" placeholder="NOME FANTASIA DO ESTABELECIMENTO DE SAÚDE EXECUTANTE">      
                                                </div>

                                                        <div class="col-md-3" >55 - CNES
                                                            <input class="form-control" type="number" placeholder="CNES">      
                                                        </div>

                                            </div>                                                      
                        
                                </div>


                                    </div>

                                    <br>
                                    </div>
                                

                        </div>
                                        
                    </div>
                    </form>
                </div>
</div>
    <?php include 'nav_inferior.php'?>    
</body>
</html>