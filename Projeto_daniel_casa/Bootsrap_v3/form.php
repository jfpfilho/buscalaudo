
<html>

<head> 
<meta charset="utf-8"/>
    
    <title> form_login</title> <!-- Navbar parte de navegação completa de um site-->
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

        <form method="POST" action=""> <!--  -->
            <div class="form-group"> <!-- class="form-group" já deixa cada grupo de configurado  -->
                E-mail:<br/>
                <input type="email" name="email" class="form-control"/><br/><br/> <!-- class="form-control" já configura e coloca bordas  -->
            </div>

            <div class="form-group">
                Senha:<br/>
                <input type="passeord" name="senha" class="form-control"/><br/><br/>
            </div>    

        <input type="submit" value="Entrar" class="btn btn-default"/> <!-- class="btn btn-default" já deixa o botão bem configurado -->


        
        </form>
                  

</body>
</html>