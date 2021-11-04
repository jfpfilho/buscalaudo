
<html>
<head> <title>tabs </title>
    <<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<div class="container">
        <h1>Meu primeiro<small> sistema Bootstrap</small></h1>
        <p>Este é meu primeiro teste.</p>

        <hr/>
        <table class="table table-striped"> <!-- TABELAS  -->
<thead>
    <tr>
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


</body>
</html>