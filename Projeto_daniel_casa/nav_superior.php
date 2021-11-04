



<html>

<head> 
<meta charset="utf-8"/>
    
    <title> Pagina Inicial</title> <!-- Navbar parte de navegação completa de um site-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>


</head> <!--  -->
<html>
<body>
<div class="container " class="col-md" style="text-align: left; margin-left: center">
        <h1 class="img-responsive " style=" text-align: center"><img    src="imagem3.png" /></h1>
</div>
    <nav class=" navbar navbar-inverse "  style="background-color:#2F4F4F; margin-left: 10%;  margin-right: 10%; margin-bottom:0%"  > <!-- navbar-inverse serve para inverter as cores do fundoe as letras / navbar-top para deixar o menu fixado em cima/ navbar-bottom deixa o menu em baixo  -->
                <div class="container-fluid">
                    <div class="navbar-header"> <!--  cabeçário do navbar-->
                        
                    </div>
                    
                    <ul class="nav navbar-nav "> <!-- / menú de cima/ class="nav navbar-nav" para dizer que é um objeto de navegação-->
                        <!--<li><a href="">Laudo</a></li>--> <!--todo o menu vai ser exibido como uma barra de navegação-->
                        <li class="dropdown"> <!-- colocar varias abas na aba  -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">LAUDO<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="laudo.php">Cadastrar</a></li>
                                <li><a href="">Pesquisar</a></li>
                            </ul>

                        <li class="dropdown"> <!-- colocar varias abas na aba  -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">PACIENTE<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_paciente.php">Cadastrar</a></li>
                                <li><a href="pesquisa_paciente.php">Pesquisar</a></li>
                            </ul>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">PROFISSIONAL<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_profissional.php">Cadastrar</a></li>
                                <li><a href="">Pesquisar</a></li>
                            </ul>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">PROCEDIMENTOS<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_procedimentos.php">Cadastrar</a></li>
                                <li><a href="">Pesquisar</a></li>
                            </ul>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">CID<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_cid.php">Cadastrar</a></li>
                                <li>
                                <a href="">Pesquisar</a></li>
                            </ul>

                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">ESTABELECIMENTO<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_emp_executante.php">Cadastrar</a></li>
                                <li><a href="">Pesquisar</a></li>
                            </ul>

                            <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">USUARIO<span class="caret"></span></a> <!-- <span class="caret"></span> para colocar a seta para baixo no nome empresa -->
                            <ul class="dropdown-menu"> <!-- class="dropdown-menu" é o menu onde fica as abas -->
                                <li><a href="cadastro_usuario.php">Cadastrar</a></li>
                                <li><a href="">Pesquisar</a></li>
                            </ul>
                    </ul>

                    <ul class="nav navbar-nav navbar-right"> <!-- navbar-right é o menu da direito da tela -->
                        <li><a href="index.php">LOGIN</a></li>
                    </ul>
                
                </div>
            
    </nav>
</body>            
</html>