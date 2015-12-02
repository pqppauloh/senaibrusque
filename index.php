<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/estilo.css" />

        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <link rel="shortcut icon" href="img/favicon.gif" />
        <link rel="stylesheet" type="text/css" href="include/estilo.css" />
        <style type="text/css">@import url("include/estilo.css");</style>
            </head>

            <body data-spy="scroll" data-target=".navbar" data-offset="50">

            <header class="jumbotron text-center" id="topo">
            <h1>SENAI/SC Brusque</h1>


            <form role="form" class="form-inline">
            <!-- Gerador de Bootstrap Form 
            http://embed.plnkr.co/ZrnnkFR3Yv9HGQHrRMiW/preview -->
            <!-- Em caso de sucesso na validação: <div class="form-group has-feedback has-success"> -->
            <!-- Em caso de falha na validação: <div class="form-group has-feedback has-error"> -->
            <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="seunome@provedor.com.br" size="40px"/>
            <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
            </header>

            <!-- Barra de Navegação -->

            <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250">
            <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">SENAI</a>
            </div>
            <div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            <li><a href="#inicio">Início</a></li>
            <li><a href="#cursos">Cursos</a></li>
            <li><a href="#noticias">Notícias</a></li>
            <li><a href="#fotos">Fotos</a></li>
            <li><a href="#videos">Vídeos</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#local">Localização</a></li>

            <!-- Menu drop-down
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>
            </ul>
            </li>
            -->
            </ul>
            </div>
            </div>
            </div>
            </nav>    
            <!-- Fim da Barra de Navegação -->

            <section id="inicio" class="container-fluid">

            <!-- Carrossel de imagens -->
            <div clas="row">                
            <!--
            Uma linha dividida em 12 colunas, sendo uma coluna central
            tamanho 8 e um distanciamento de 2

            Sistema de Grid no Bootstrap
            http://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp
            -->
            <div class="col-lg-8 col-lg-offset-2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="2000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="img/saiba_mais_sobre_o_senai.png" alt="Chania">
            </div>

            <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Chania">
            </div>

            <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Flower">
            </div>

            <div class="item">
            <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Flower">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
            </div> <!-- row -->
            <!-- fim do carrossel de imagens -->
            </section>
            <section id="cursos" class="container-fluid">
            <h1>Cursos</h1>
            <div class="row row-padded row-bordered row-centered">

            <div class="col-sm-12">
            <div class="row m-b-lg">
            <div class="col-sm-8 col-sm-offset-2 text-center">
            <h3></h3>
            <h4 class="m-b-lg"></h4>
            </div>
            </div>

            <div class="row">
            <div class="col-md-4 m-b-lg">
            <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading" style="background-image: url(//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/insta-2.jpg?14626024167487121591);"></div>
            <div class="panel-body text-center">
            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-fat.jpg?14626024167487121591"></img>
            <h5 class="panel-title">
            Jacob Thornton
            </h5>
            <p class="m-b">
            Star trek flow so they klingon me. I wrote this he…
            </p>
            <div class="container">
            <!-- Trigger the modal with a button -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            </div>
            </div>
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            <span class="icon icon-add-user"></span>

            View GitHub
            </div>
            </div>
            </div>


            <div class="col-md-4 m-b-lg">
            <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading" style="background-image: url(//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/insta-1.jpg?14626024167487121591);"></div>
            <div class="panel-body text-center">
            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-mdo.jpg?14626024167487121591"></img>
            <h5 class="panel-title">

            Mark Otto

            </h5>
            <p class="m-b">

            Design at GitHub. Creator of Bootstrap. Previously…

            </p>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

            </div>
            </div>

            </div>

            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            <span class="icon icon-add-user"></span>

            View GitHub


            </a>
            </div>
            </div>
            </div>


            <div class="col-md-4 m-b-lg" id="div1">
            <div class="panel panel-default panel-profile m-b-0">
            <div class="panel-heading" style="background-image: url(//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/insta-1.jpg?14626024167487121591);"></div>
            <div class="panel-body text-center">
            <img class="panel-profile-img" src="//cdn.shopify.com/s/files/1/0691/5403/t/108/assets/avatar-mdo.jpg?14626024167487121591"></img>
            <h5 class="panel-title">

            Mark Otto

            </h5>
            <p class="m-b">

            Design at GitHub. Creator of Bootstrap. Previously…

            </p>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
            <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>

            </div>
            </div>

            </div>

            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
            <span class="icon icon-add-user"></span>

            View GitHub


            </a>
            </div>
            </div>
            </div>


            </div>


            </div>

            </section>
            <section id="noticias" class="container-fluid">
            <h1>Notícias</h1>
            <div id="tudo">
            <table width="776" border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td>
            <div id="topo">
            <a href="http://www.lagunanews.net" title="lagunanews.net - A sua identidade digital em informação" class="topo_rodape">lagunanews.net</a>
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div id="logo">
            FSM Notícias v. 2.0
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div id="data">
            <? include ("include/data_hora.php"); ?>
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div id="linha">
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td align="center" valign="top" style="width:122px; border-right:#333 1px dotted;">
            <div id="cabecalho">
            CONTEÚDO
            </div>
            <div id="menu">
            <ul id="nav">
            <li><a href="index.php">&#187; ÚLTIMAS NOTÍCIAS</a></li>
            <? include ("menu.php"); ?>
            <li><a href="./contato/">&#187; FALE CONOSCO</a></li>
            <li><a href="./indicacao/">&#187; INDIQUE NOSSO SITE</a></li>
            </ul>
            </div>
            </td>
            <td align="center" valign="top">
            <? include ("miolo.php"); ?>
            </td>
            <td align="center" valign="top" style="width:160px; border-left:#333 1px dotted;">
            <div id="cabecalho2">
            PROCURAR NOTÍCIA
            </div>
            <div id="menu2" align="center">
            <form method="post" action="busca.php">
            <input name="palavra" type="text" class="buscar">
            <input type="image" border="0" src="img/ok.gif" hspace="4" width="22" height="15">
            </form>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            <tr>
            <td>
            <div id="rodape">
            Resolução mínima 800x600 - <font color="#1874cd">©2004-2006 FSM Notícias</font>.<!--Creative Commons License-->
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/br/" class="topo_rodape" title="Este site está sob uma licença da Creative Commons - Creative Commons License">
            Alguns direitos reservados.</a><!--/Creative Commons License-->
            <!-- <rdf_RDF xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
            <Work rdf:about="">
            <license rdf:resource="http://creativecommons.org/licenses/by-sa/2.5/br/" />
            <dc_type rdf:resource="http://purl.org/dc/dcmitype/Text" />
            </Work>
            <License rdf:about="http://creativecommons.org/licenses/by-sa/2.5/br/">
            <permits rdf:resource="http://web.resource.org/cc/Reproduction"/>
            <permits rdf:resource="http://web.resource.org/cc/Distribution"/>
            <requires rdf:resource="http://web.resource.org/cc/Notice"/>
            <requires rdf:resource="http://web.resource.org/cc/Attribution"/>
            <permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/>
            <requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf_RDF> -->
            <div>
            </td>
            </tr>
            </table>
            </div>    
            </section>
            <section id="fotos" class="container-fluid">
            <h1>Fotos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>
            <section id="videos" class="container-fluid">
            <h1>Vídeos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>
            <section id="contato" class="container-fluid">
            <h1>Contato</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>
            <section id="local" class="container-fluid">
            <h1>Localização</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>
            <script src="js/meuscript.js"></script>
            </body>
            </html>
