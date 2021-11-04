
<html>

    <head> 
    <meta charset="utf-8"/>
        
        <title> Navbar Completo</title> <!-- Navbar parte de navegação completa de um site-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
    

    </head> <!--  -->

    <body>
        <div class="container">
            <h1>Meu primeiro<small> sistema Bootstrap</small></h1>
            <p>Este é meu primeiro teste.</p>

            <hr/>

            <nav class="navbar navbar-inverse"> <!-- navbar-inverse serve para inverter as cores do fundoe as letras / navbar-top para deixar o menu fixado em cima/ navbar-bottom deixa o menu em baixo  -->
                <div class="container-fluid">
                    <div class="navbar-header"> <!--  cabeçário do navbar-->
                        <a class="navbar-brand" href="">MinhaEmpresa.com</a> <!-- class="navbar-brand" coloca o email em evidencia -->
                    </div>

                    <ul class="nav navbar-nav"> <!-- / menú de cima/ class="nav navbar-nav" para dizer que é um objeto de navegação-->
                        <li><a href="">Home</a></li> <!--todo o menu vai ser exibido como uma barra de navegação-->
                        <li class="dropdown"> <!-- colocar varias abas na aba  -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Empresa<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="">Estrutura</a></li>
                                <li><a href="">Cultura</a></li>
                                <li><a href="">Carreira</a></li>
                        </li>   
                            </ul>
                        <li><a href="">Contato</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right"> <!-- navbar-right é o menu da direito da tela -->
                        <li><a href="">Login</a></li>
                    </ul>
                
                </div>
            
            </nav>

            <nav class="navbar navbar-inverse"> <!-- navbar-inverse serve para inverter as cores do fundoe as letras / navbar-top para deixar o menu fixado em cima/ navbar-bottom deixa o menu em baixo  -->
                <div class="container-fluid">
                    <div class="navbar-header"> <!--  cabeçário do navbar-->
                        <a class="navbar-brand" href="">MinhaEmpresa.com</a> <!-- class="navbar-brand" coloca o email em evidencia -->
                    </div>

                    <ul class="nav navbar-nav"> <!-- / menú de cima/ class="nav navbar-nav" para dizer que é um objeto de navegação-->
                        <li><a href="">Home</a></li> <!--todo o menu vai ser exibido como uma barra de navegação-->
                        <li class="dropdown"> <!-- colocar varias abas na aba  -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Empresa<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="">Estrutura</a></li>
                                <li><a href="">Cultura</a></li>
                                <li><a href="">Carreira</a></li>
                        </li>   
                            </ul>
                        <li><a href="">Contato</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right"> <!-- navbar-right é o menu da direito da tela -->
                        <li><a href="">Login</a></li>
                    </ul>
                
                </div>
            
            </nav>
            
        </div>
                

    </body>
</html>