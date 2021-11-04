
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> laudo</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="style.css" rel="stylesheet" href="bootstrap.min.css"/>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
    

    </head> <!--  -->

    <body>
    <?php include 'nav_superior.php'?>
    <div class="div" >
            <div class="formulario" class="container container-fluid container-sm">
                <form   class="form-group" method="POST" action=""> 
                    <div class="form-group"> <!-- class="form-group" já deixa cada grupo de configurado  -->
                        <div class="cabecario">
                        <p>IDENTIFICAÇÃO DO ESTABELECIMENTO DE SAÚDE (SOLICITANTE)</p>
                        </div>
                        <label class="subtitulo">1 - NOME DO ESTABELECIMENTO DE SAÚDE SOLICITANTE </label> 
                        <label class="subtitulo" style="margin-left: 54%;"> 2 - CNES</label><br> <!-- &nbsp; serve para dar espaço-->
                                <label class="caixa" style=" width: 77.4%;">  
                                    <input  type="text" name="estabelimento" class="form-control" placeholder="NOME DO ESTABELECIMENTO DE SAÚDE SOLICITANTE"/>
                                </label> 

                                        <label class="caixa" style=" width: 22%; margin-left: 0%;">
                                            <input  type="text" name="cnes" class="form-control" placeholder="CNES"/><!-- class="form-control" já configura e coloca bordas  -->
                                        </label> <br>

                                                        <!--  IDENTIFICAÇÃO DO PACIENTE-->

                            <div class="cabecario">
                                <p>IDENTIFICAÇÃO DO PACIENTE</p>
                            </div>

                            <label class="subtitulo">3 - NOME DO PACIENTE </label>  
                                <label class="subtitulo" style="margin-left: 60.5%; "> 4 - SEXO</label>
                                    <label class="subtitulo" style="margin-left: 8%;">5 - Nº DO PRONTUÁRIO</label><br> <!-- &nbsp; serve para dar espaço-->
                            
                                            <label class="caixa" style=" width: 65%;">  
                                                <input  type="text" name="nome_paciente" class="form-control" placeholder="NOME DO PACIENTE"/>
                                            </label> 

                                                            <label>
                                                                <div style="border-radius: 5px; border:1.5px solid #000 ; border-color:#DCDCDC; width: 145% ; height: 5%; background-color: #FFFFFF ; margin-top: 0%; margin-left: 2%" > <!-- ATENÇÃO ! arrumar essa div -->
                                                                    <label >
                                                                            Mas.
                                                                            <input  type="checkbox" id="Mas" name="sexo" valeu="Mas"/>   <!-- class="form-control" já configura e coloca bordas  -->
                                                                
                                                                            Fem.
                                                                            <input  type="checkbox" id="Mas" name="sexo" valeu="Fem"/>
                                                                    </label>
                                                                

                                                                </div>    
                                                            </label>

                                                                <label class="caixa" style=" width: 20.6%; margin-left: 4.5%;">
                                                                    <input  type="text" name="n_formulario" class="form-control" placeholder=" Nº DO PRONTUÁRIO"/><!-- class="form-control" já configura e coloca bordas  -->
                                                                </label> <br>      


                            <label class="subtitulo">6 - CARTÃO NACIONAL DE SAÚDE (CNS)</label>
                                <label class="subtitulo" style="margin-left: 35%;"> 7 - DATA DE NASCIMENTO</label>
                                    <label class="subtitulo" style="margin-left: 3%;"> 8 - RAÇA/COR</label>
                                        <label class="subtitulo" style="margin-left: 7%;"> 8.1 - ETNIA</label><br> <!-- &nbsp; serve para dar espaço-->

                                                <label class="caixa" style=" width: 52%;">  
                                                    <input  type="text" name="cartao_nacional" class="form-control" placeholder="CARTÃO NACIONAL DE SAÚDE"/>
                                                </label> 

                                                        <label class="caixa" style=" width: 13%; margin-left: 0%;">
                                                            <input  type="text" name="dt_nascimento" class="form-control" placeholder="RAÇA/COR"/>
                                                        </label>

                                                                <label class="caixa" style=" width: 13%; margin-left: 0%;">
                                                                    <input  type="text" name="raca_cor" class="form-control" placeholder="ETNIA"/>
                                                                </label>

                                                                        <label class="caixa" style=" width: 20.8%; margin-left: 0%;">
                                                                            <input  type="text" name="etnia" class="form-control" />
                                                                        </label> <br>
                            
                            <label class="subtitulo">9 - NOME DA MÃE </label>  <label class="subtitulo" style="margin-left: 65%;"> 10 - TELEFONE DE CONTATO</label><br> <!-- &nbsp; serve para dar espaço-->
                                    <label class="caixa" style=" width: 65.3%;">  
                                        <input  type="text" name="n_mae" class="form-control"/>
                                    </label> 

                                            <label class="caixa" style=" width: 34.2%; margin-left: 0%;">
                                                <input  type="text" name="tel_contato_mae" class="form-control"/><!-- class="form-control" já configura e coloca bordas  -->
                                            </label> <br>

                            <label class="subtitulo">11 - NOME DO RESPONSÁVEL </label>  <label class="subtitulo" style="margin-left: 59.7%;"> 12 - TELEFONE DE CONTATO</label><br> <!-- &nbsp; serve para dar espaço-->
                                    <label class="caixa" style=" width: 65.3%;">  
                                        <input  type="text" name="n_responsavel" class="form-control"/>
                                    </label> 

                                        <label class="caixa" style=" width: 34.2%; margin-left: 0%;">
                                            <input  type="text" name="tel_contato_resp" class="form-control"/><!-- class="form-control" já configura e coloca bordas  -->
                                        </label> <br>

                            <label class="subtitulo">13 - ENDEREÇO (RUA, Nº, BAIRRO)</label>  <br> <!-- &nbsp; serve para dar espaço-->
                                        <label class="caixa" style=" width: 100%;">  
                                            <input  type="text" name="endereço" class="form-control"/>
                                        </label>  <br>

                            <label class="subtitulo"  style="margin-left: 10%;">14 - MUNICÍPIO DE RESIDÊNCIA</label>
                            <label class="subtitulo" style="margin-left: 35%;"> 15 - CÓD. IBGE MUNICÍPIO</label>
                            <label class="subtitulo" style="margin-left: 5%;"> 16 - UF</label>
                            <label class="subtitulo" style="margin-left: 8%;"> 17 - CEP</label>
                          

                            <label class="caixa" style=" width: 55%;">  
                                <input  type="text" name="cartao_nacional" class="form-control"/>
                            </label> 

                                    <label class="caixa" style=" width: 19.5%; margin-left: -0.5%;">
                                        <input  type="text" name="dt_nascimento" class="form-control"/>
                                    </label>

                                            <label class="caixa" style=" width: 8%; margin-left: -0.5%;">
                                                <input  type="text" name="raca_cor" class="form-control"/>
                                            </label>

                                                    <label class="caixa" style=" width: 17.8%; margin-left: -0.5%;">
                                                        <input  type="text" name="raca_cor" class="form-control"/>
                                                    </label> <br>


                                                            
                         <div class="cabecario">
                        <p>PROCEDIEMNTO SOLICITADO</p>
                        </div>

                        <br>

                        

                                
                                <label class="subtitulo" style="margin-left: 10%;">18 - CÓDIGO DO PROCEDIMENTO PRINCIPAL</label>  
                                <label class="subtitulo" style="margin-left: 17%;"> 19 - NOME DO PROCEDIMENTO PRINCIPAL</label>
                                <label class="subtitulo" style="margin-left: 28%;">20 - QTDE.</label><br> <!-- &nbsp; serve para dar espaço-->

                                        <label class="caixa" style=" width: 40%;">  
                                            <input  type="text" name="cod_proc_pric" class="form-control"/>
                                        </label> 

                                                <label class="caixa" style=" width: 51%; margin-left: 0%;">
                                                    <input  type="text" name="nome_proc_princ" class="form-control"/><!-- class="form-control" já configura e coloca bordas  -->
                                                </label> 
                                                
                                                        <label class="caixa" style=" width: 8%; margin-left: 0%;">
                                                            <input  type="text" name="qtd_proc_princ" class="form-control"/><!-- class="form-control" já configura e coloca bordas  -->
                                                        </label>
                                                <br>         

                                        <mat-label_ngcontent-jms-c4 class="ng-tns-c4-1-ng-star-inserted"> nº do contarto</mat-label_ngcontent-jms-c4>
                                        <input type="text" name="" id="">


                    </div>


                            
                        
                            
            

                        

                   


                </form>
        </div>
                       
                
    </div>
    <?php include 'nav_inferior.php'?>            

    </body>
</html>

<!-- required  não deixa enviar os dados faltando-->
<!-- type"url" só enviar se estiver no formato de url-->
<!-- type "tel" já abri o telcado número, funciona no celular -->
<!--type "number " já aparece as barrinhas -->
<!-- type"range" min= "1"  max="100"  Cria como se fosse um potenciometro-->
<!-- type"date" já sai configurado o calendario-->
 <!-- required  não deixa enviar os dados faltando-->
<!-- -->

