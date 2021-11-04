
<html>
<head> <title>paginacao </title>
    <<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
</head>

<div class="container">
        <h1>Meu primeiro<small> sistema Bootstrap</small></h1>
        <p>Este é meu primeiro teste.</p>

        <hr/>
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

</body>
</html>