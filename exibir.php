<?
include ("include/conexao.php");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT * FROM noticias";
// agora utilizando a última função apresentada, faremos a
// execução consequentemente será criada a nossa tabela
$query = @mysql_query($sql);
// note que novamente foi utilizado o @(arroba) a frente da função
// agora faremos um teste para verificar se a função mysql_query
// foi bem sucedida
if (!$query){
die ("Problemas ao executar o sql !!!");
} else {
// neste ponto, faremos o tratamento das informações retornadas
// pela execução do sql de seleção de dados
while ($coluna = @mysql_fetch_array($query)){
// esta atribuição de coluna["coluna_da_tabela"] a uma
// variavel se dá pelo fato apenas de simplificar o
// entendimento do que está se fazendo
$id = $coluna["id"];
$categoria = $coluna["categoria"];
$subtitulo = $coluna["subtitulo"];
$texto = $coluna["texto"];
$fonte = $coluna["fonte"];
$fonte_foto = $coluna["fonte_foto"];
$data = $coluna["data"];
$hora = $coluna["hora"];
$dstq = $coluna["dstq"];
$foto = $coluna["foto"];
$titulo = $coluna["titulo"];
$titulo = stripslashes($titulo);
$subtitulo = stripslashes($subtitulo);
$texto = stripslashes($texto);

// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
switch ($noticia) {
case "$id":
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:: FSM Notícias - A sua identidade digital em informação ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="title" content="FSM Notícias - A sua identidade digital em informação" />
<meta name="author" content="José Augusto dos Santos Moraes" />
<meta http-equiv="content-laguage" content="Português" />
<link rel="shortcut icon" href="img/favicon.gif" />
<link rel="stylesheet" type="text/css" href="include/estilo.css" />
<style type="text/css">
@import url("include/estilo.css");
</style>
<script type="text/javascript">
function TamFonte(num, id)
{
	document.getElementById(id).className = "ft"+num;
}
</script>
<style type="text/css">
#noticia { text-align: justify; }
.ft1 { font-family: 'trebuchet ms'; font-size: 11px; color: #000000; text-decoration: none; }
.ft1:hover { color: #000000; text-decoration: none; }
.ft1:visited { color: #000000; text-decoration: none; }
.ft2 { font-family: 'trebuchet ms'; font-size: 13px; color: #000000; text-decoration: none; }
.ft2:hover { color: #000000; text-decoration: none; }
.ft2:visited { color: #000000; text-decoration: none; }
.ft3 { font-family: 'trebuchet ms'; font-size: 15px; color: #000000; text-decoration: none; }
.ft3:hover { color: #000000; text-decoration: none; }
.ft3:visited { color: #000000; text-decoration: none; }
</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center" valign="top" bgcolor="#CCCCCC">
<table width="776" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3">
        <div id="topo">
        <a href="http://www.lagunanews.net" title="lagunanews.net - A sua identidade digital em informação" class="topo_rodape">lagunanews.net</a>
        </div>
	</td>
  </tr>
  <tr>
    <td colspan="3">
        <div id="logo">
        FSM Notícias v. 2.0
        </div>
	</td>
  </tr>
  <tr>
    <td colspan="3">
        <div id="data">
        <? include ("include/data_hora.php"); ?>
        </div>
	</td>
  </tr>
  <tr>
    <td colspan="3">
    <div id="linha">
    </div>
    </td>
  </tr>
  <tr>
    <td class="borderrd" width="122" align="center" valign="top">
         <div id="cabecalho">
         CONTEÚDO
         </div>
         <div id="menu">
            <ul id="nav">
               <li><a href="index.php">&#187; ÚLTIMAS NOTÍCIAS</a></li>
               <? include ("menu.php");  ?>
               <li><a href="./contato/">&#187; FALE CONOSCO</a></li>
               <li><a href="./indicacao/">&#187; INDIQUE NOSSO SITE</a></li>
            </ul>
          </div>
    </td>
    <td width="494" align="center" valign="top">
<script>
<!--
function EnviarNoticia(URL) {
  var width = 365;
  var height = 170;
  var left = 50;
  var top = 10
  window.open(URL, 'ema3', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=no, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
}
-->
</script>
<?
if ($foto == "") {
?>
    <table border="0" width="97%" cellpadding="0" cellspacing="4">
     <tr>
  		<td colspan="2" width="72%" align="left" valign="middle"><a name="topo"><font class="cat_data_hora"><? echo "$categoria"; ?>
        - <? echo "$data2 - $hora"; ?></font><br><font class="tit"><? echo "$titulo"; ?></font><br>
        <font class="sub"><? echo "$subtitulo"; ?></font></td>
	</tr>
	<tr>
		<td colspan="2" style="padding-top: 0.5em">
		<div align="right" style="padding-right: 0.5em">
        <span class="ft1"><a href="#" onclick="TamFonte(1, 'noticia')" class="ft1">A</a></span>&nbsp;
        <span class="ft2"><a href="#" onclick="TamFonte(2, 'noticia')" class="ft2">A</a></span>&nbsp;
        <span class="ft3"><a href="#" onclick="TamFonte(3, 'noticia')" class="ft3">A</a><p>
        </div>
        <div id="noticia" class="ft1">
        <? print (nl2br(htmlentities($texto))); ?>
       <div class="cat_data_hora" style="padding-top:1em; text-align:right;">FONTE: <? echo $fonte; ?></div></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<div align="center" class="cat_data_hora" style="text-align:center"><br><p><a href="javascript:window.history.go(-1)" class="cat_data_hora">&#171; voltar</a> |
        <a href="imprimir.php?noticia=<? echo $id; ?>" target="_blank"><img src="img/imprimir.gif" width="14" height="15" border="0" alt="versão para impressão"></a> |
        <a href="javascript:EnviarNoticia('enviar.php?noticia=<? echo $id ?>')"><img src="img/enviar_not.png" width="16" height="16" border="0" alt="enviar notícia por email"></a> |
        <a href="#topo" class="cat_data_hora">topo</a></div>
		</td></tr></table>
<?
} else {
?>
    <table border="0" width="97%" cellpadding="0" cellspacing="4">
    <tr>
  		<td align="left" valign="middle"><a name="topo"><font class="cat_data_hora"><? echo "$categoria"; ?>
        - <? echo "$data2 - $hora"; ?></font><br><font class="tit"><? echo "$titulo"; ?></font><br>
        <font class="sub"><? echo "$subtitulo"; ?></font></td>
	</tr>
	<tr>
		<td valign="top" style="padding-top: 0.5em">
		<div align="right" style="padding-right: 0.5em">
        <span class="ft1"><a href="#" onclick="TamFonte(1, 'noticia')" class="ft1">A</a></span>&nbsp;
        <span class="ft2"><a href="#" onclick="TamFonte(2, 'noticia')" class="ft2">A</a></span>&nbsp;
        <span class="ft3"><a href="#" onclick="TamFonte(3, 'noticia')" class="ft3">A</a><p>
        </div>
        <div style="width:240px; height:15px; font-size:10px; color:#333; text-decoration:none; text-align:left;">
        <? echo $fonte_foto; ?>
        <img src="mini.php?gd=2&src=<? echo $foto; ?>&maxw=250" border=0 alt="<? echo $titulo; ?>" title="<? echo $titulo; ?>" align="left"/>
        </div>
        <div id="noticia" class="ft1">
        <? print (nl2br(htmlentities($texto))); ?>
       <!-- fim do corpo da matéria --></div>
       <div class="cat_data_hora" style="padding-top:1em; text-align:right;">FONTE: <? echo $fonte; ?></div></td>
	</tr>
	<tr>
		<td align="center">
		<div align="center" class="cat_data_hora" style="text-align:center"><br><p><a href="javascript:window.history.go(-1)" class="cat_data_hora">&#171; voltar</a> |
        <a href="imprimir.php?noticia=<? echo $id; ?>" target="_blank"><img src="img/imprimir.gif" width="14" height="15" border="0" alt="versão para impressão"></a> |
        <a href="javascript:EnviarNoticia('enviar.php?noticia=<? echo $id ?>')"><img src="img/enviar_not.png" width="16" height="16" border="0" alt="enviar notícia por email"></a> |
        <a href="#topo" class="cat_data_hora">topo</a></div>
		</td></tr></table>
<?
break;
}
}
}
}
?>
</td><td width="160" class="borderld" align="center" valign="top">
                  <div id="cabecalho2" class="topo_rodape">
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
  <tr>
    <td colspan="3">
        <div id="rodape" class="topo_rodape">
        Resolução mínima 800x600 - <font color="#1874cd">©2004-2006 FSM Notícias</font>.<!--Creative Commons License-->
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/br/" class="topo_rodape" title="Este site está sob uma licença da Creative Commons - Creative Commons License">
        Alguns direitos reservados.</a><!--/Creative Commons License-->
        <!-- <rdf:RDF xmlns="http://web.resource.org/cc/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	    <Work rdf:about="">
        <license rdf:resource="http://creativecommons.org/licenses/by-sa/2.5/br/" />
	    <dc:type rdf:resource="http://purl.org/dc/dcmitype/Text" />
	    </Work>
	    <License rdf:about="http://creativecommons.org/licenses/by-sa/2.5/br/">
        <permits rdf:resource="http://web.resource.org/cc/Reproduction"/>
        <permits rdf:resource="http://web.resource.org/cc/Distribution"/>
        <requires rdf:resource="http://web.resource.org/cc/Notice"/>
        <requires rdf:resource="http://web.resource.org/cc/Attribution"/>
        <permits rdf:resource="http://web.resource.org/cc/DerivativeWorks"/>
        <requires rdf:resource="http://web.resource.org/cc/ShareAlike"/></License></rdf:RDF> -->
        <div>
	</td>
  </tr>
</table>
	</td>
  </tr>
</table>
</body>
</html>
