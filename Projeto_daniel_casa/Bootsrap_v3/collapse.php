
<html>


<head> 
<meta charset="utf-8"/>
    
    <title>COLLAPSE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>

</head>

<body>
<div class="container">
        <h1>Meu primeiro<small> sistema Bootstrap</small></h1>
        <p>Este é meu primeiro teste.</p>

        <hr/>

         <!-- COLLAPSE : conteúdo que vai aparecer a partir de um comando, que mostrar ou oculta -->

         <button data-toggle="collapse" data-target="#teste" >collapse</button> 
                    <div id="teste" class="collapse">   <!-- inserido in a messagem só a parece quando clica no botão -->
                        alguma frase qualquer...
                    </div>

                    <hr/>

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
</body>
</html>
<!-- j -->