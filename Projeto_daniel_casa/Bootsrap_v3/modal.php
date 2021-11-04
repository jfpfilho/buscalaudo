
<html>

<head> 
<meta charset="utf-8"/>
    
    <title> modal</title> <!-- Navbar parte de navegação completa de um site-->
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

        <button class="btn btn-info" data-toggle="modal" data-target="#janela">Abrir Modal</button> <!-- data-toggle="modal" o que vai ser ativado // data-target="#janela" onde está o modal, qual modal abrir  -->

        <div id="janela" class="modal" role="dialog">

            <div class="modal-dialog modal-lg"> <!-- modal-sm para diminuir o madal/ modal-lg grande / modal-md médio -->
                <div class="modal-content"> <!-- onde fica o conteúdo -->
                    <div class="modal-header"> <!-- cabeçário -->
                        <button class="close" data-dismiss="modal">&times;</button> <!-- &times vai deixar o x para fechar -->
                        <h4 class="modal-title">Título do meu modal</h4> <!-- onde fica o titulo -->
                    <div class="modal-body"> <!-- conteúdo -->
                        <p>Conteúdo do meu modal</p>
                    </div> 
                    <div class="modal-footer"><!-- rodapé -->
                        <button class="btn btn-default" data-dismiss="modal">fechar</button>                    
                    </div>
                    </div>
                </div>
            </div>
     
        </div>

        
                  

</body>
</html>