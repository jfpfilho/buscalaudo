
<html>
<head> 
    <meta charset="utf-8"/>
    <title>dropdown </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<body>

<div class="container">  <!-- -->
        <h1>Meu primeiro<small> sistema Bootstrap</small></h1>
        <p>Este é meu primeiro teste.</p>

        <hr/>

        <div class="dropdown">  <!-- engloba todo o recurso -->

        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Escolha<span class="caret"></span></button> <!-- o botão que o usuário vai clicar --> 

                
                <ul class="dropdpwn-menu"> <!-- menu adicional que vai ser aberto.--> 
                    <li class="dropdown-header">Linguagem a serem aprendidas:</li>
                    <li><a href="#">PHP</a></li>
                    <li class="disabled"><a href="#">HTML</a></li>  <!-- class="disabled" desativa o botão-->
                    <li><a href="#">CSS</a></li>  
                    <li class="divider"><a href="#"></a></li>  <!--class="divider"  divida as classes de botões -->
                    <li><a href="#">Javascript</a></li>                            
                </ul>


            <div class="dropdown"> 
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Procedimentos<span class="caret"></span></button>
                    
                        <ul class="dropdown-menu">
                            <li> <a href="#"></a> Primario</li>
                            <li> <a href="#"></a> Secundário</li>
                        </ul>     
            </div>


        </div>
 </div>       
        
</body>
</html>