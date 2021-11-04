
<html>


<head> 
<meta charset="utf-8"/>
    
    <title>Index_Projeto Daniel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
   

</head>

<body>
            

    <div class="container container-fluid">
        <h1><img style="text-align:center"  src="imagem3.png" class="img-responsive "/></h1> <!-- Navbar Search-->

            <div class="alert alert-success fade"> <!-- faz um alerta numa operação -->
                <a href="#"class="close" data-dimiss="alert" aria-label="close">&times;</a>    <!-- serve para colocar um botão para fechar o aviso -->
                Senha criada com sucesso!
            </div>


        <div class="btn-group ">  <!-- Navbar Search-->
                    <a class="btn btn-primary">A</a>
                    <a class="btn btn-primary">B</a>
                    <a class="btn btn-primary">C</a>
            </div>

            

        <p>Texto Livre</p>
        <div class="row" > 
            <div class="col-sm-2" style="text-align:center;background-color:#00FF00">
            <button class="btn btn-success btn-md"> Pagina Inicial</button>
        
            <p>cadastros</p>

            <div class="btn-group">
                <button class="btn btn-primary"> Procedimentos</button>
                <button class="btn btn-primary"> Proc Secundarios</button>
                <button class="btn btn-primary"> paciente</button>
            
            </div>

            <div class="dropdown"> 
                <button class="btn btn-primary dropdown-toggle"data-toggle="dropdown">Procedimentos<span class="caret"></span></button>
                    
                        <ul class="dropdown-menu">
                            <li>Primario</li>
                            <li>Secundário</li>
                        </ul>     
            </div>


            <div class="jumbotron"> <!-- Navbar Search-->
                <h1>Curso de PHP</h1>
                <p> é o melhor curso</p>
            </div>
     
            <button class="btn btn-primary"> mensagens<span class="badge">7</span></button>  <!-- <span class="badge">7</span> para mostrar quantas mensagens há dentro da caixa de mensagem-->
            <h1>menu<span class="label label-warning">novo</span></h1>  <!--<span class="label label-warning">novo</span> para dizer que o menu é novo-->
            


            <div class="panel panel-default"></div> <!-- panel serve para fazer paineis de notícias -->
            <div class="panel-heading">Esportes</div> <!-- cabeçário-->
            <div class="panel-body">Noticias e Conteúdos</div> <!-- corpo-->
                
         
            
            <p>Texto Livre</p>
            <p>Texto Livre</p>
                            
            
            </div>
                        
            <div class="col-sm-10" style="text-align:center;background-color:#008000">


            <div class="panel panel-default"> <!-- panel serve para fazer paineis de notícias -->
                <div class="panel-heading">Esportes</div> <!-- cabeçário-->
                <div class="panel-body">Noticias e Conteúdos</div> <!-- corpo-->
            </div>
                
                <!-- COLLAPSE : conteúdo que vai aparecer a partir de um comando, que mostrar ou oculta -->

                <button data-toggle="collapse" data-target="#teste" >collapse</button> 
                    <div id="teste" class="collapse">   <!-- inserido in a messagem só a parece quando clica no botão -->
                        alguma frase qualquer...
                    </div>

                    <a href="#teste" data-toggle="collapse" >botão em tag a</a>  <!-- usando o link no lugar do botão -->
                    <div id="teste" class="collapse">   <!-- inserido in a messagem só a parece quando clica no botão -->
                        alguma frase qualquer...
                    </div>


                    <!-- Usando o collapse juntamente com o painel -->
                    <div class="panel panel-default"> <!-- panel serve para fazer paineis de notícias -->
                            <div class="panel-heading">
                                <h4 class="panel-title"> <!-- cabeçário-->
                                    <a href="#teste" data-toggle="collapse">Granito</a>
                                </h4> 
                            </div> 
                                <div id="teste" class="collapse panel-collapse">
                                    <div class="panel-body">Especificação sobre granito</div> <!-- corpo-->
                                </div>    
                     </div>

                    <!-- list-group -->

                    <ul class="list-group">  <!-- list-group para fazer listas desordenadas -->
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 1</li>
                                              
                    </ul>


                    <div class="list-group">  <!-- list-group para fazer menu  -->
                        <a class="list-group-item">Item 1</a>
                        <a class="list-group-item disabled"  >Item 2</a>  <!-- o disabled é para desativar o intem  -->
                        <a class="list-group-item active">Item 3</a>  <!-- active para deixar o item já marcado  -->
                        <a class="list-group-item list-group-item-primary">Item 4</a>  <!-- list-group-item-primary pode mudar as cores   -->
                        <a class="list-group-item list-group-success">Item 5</a>
                      
                       
                    </div>


                     <!-- Tabs (abas) -->    

                     <Ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab">HOME</a>
                        </li>

                        <li>
                            <a href="#sobre" data-toggle="tab">SOBRE</a>
                        </li>

                        <li>
                            <a href="#contato" data-toggle="tab">CONTATO</a>
                        </li>
                     </Ul>
                     <div class="tab-content">
                        <div id="home" class="tab-pane active in">
                            <h3>HOME</h3>
                            <p> Conteudo da HOME</p>
                        </div>

                        <div id="sobre" class="tab-pane ">
                            <h3>SOBRE</h3>
                            <p> Página sobre</p>
                        </div>

                        <div id="contato" class="tab-pane ">
                            <h3>CONTATO</h3>
                            <p> Formulário de Contato</p>
                        </div>
                     
                     </div>

                      <!-- pager e paginação ( colocar numero) --> 

                      <ul class="pagination">
                        <li><a href="" class="active">1</a></li>  <!-- class="active"  deixar a primeira página marcada --> 
                        <li><a href="">2</a></li>
                        <li><a href=""  class="disabled">3</a></li> <!-- class="disabled"  desativar a página --> 
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                      </ul>  

                     <!-- pager  ( colocar o as opções : próxima e anterior) --> 
                     <ul>
                        <li class="previous"><a href="">Aula Anterior</a> </li>
                        <li class="next"><a href="">Próxima Aula </a> </li>
                     </ul>






            
                                   
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
                            <p>Texto Livre</p>
            </div>
      

    </div>


<!-- /* Keyword values */
text-align: left;
text-align: right;
text-align: center;
text-align: justify;
text-align: justify-all;
text-align: start;
text-align: end;
text-align: match-parent;

/* Block alignment values (Non-standard syntax) */
text-align: -moz-center;
text-align: -webkit-center;

/* Global values */
text-align: inherit;
text-align: initial;
text-align: unset;-->    
  




</body>
</html>