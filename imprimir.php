<?
/* VERSÃO DA NOTÍCIA PARA IMPRESSÃO */
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
<link rel="stylesheet" type="text/css" href="include/stilo.css" />
<style type="text/css">
@import url("include/stilo.css");
</style>
</head>
<body onload='window.print()'>
<?
include ("include/data_hora.php");
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id, categoria, titulo, subtitulo, texto, data, hora, foto FROM noticias";
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
$titulo = $coluna["titulo"];
$subtitulo = $coluna["subtitulo"];
$texto = $coluna["texto"];
$fonte = $coluna["fonte"];
$data = $coluna["data"];
$hora = $coluna["hora"];
$foto = $coluna["foto"];

// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
switch ($noticia) {
case "$id":

if ($foto == "") {
?>
<center>
    <table border="0" width="97%" cellpadding="0" cellspacing="4">
     <tr>
  		<td colspan="2" width="72%" align="left" valign="middle"><a name="topo"><font class="cat_data_hora"><? echo "$categoria"; ?>
        - <? echo "$data2 - $hora"; ?></font><br><font class="tit"><? echo "$titulo"; ?></font><br>
        <font class="sub"><? echo "$subtitulo"; ?></font></td>
	</tr>
	<tr>
		<td colspan="2" style="padding-top: 0.5em">
        <div id="noticia" class="ft1">
        <? print (nl2br(htmlentities($texto))); ?>
       <div class="cat_data_hora" style="padding-top:1em; text-align:right;">FONTE: <? echo $fonte; ?></div></td>
	</tr>
</table>
</center>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr><td align="right" valign="bottom"><hr color="#999999" size="1" noshade><br>
<font class="normal">&copy;2004-2006 FSM Notícias - Extraído de:
<b>www.lagunanews.net/exibir.php?noticia=<? echo "$id"; ?>
</b> - Acesso: <b><? echo "$data2 às $hora"; ?></b></font></td></tr></table>
<?
} else {
?>
<center>
    <table border="0" width="97%" cellpadding="0" cellspacing="4">
    <tr>
  		<td align="left" valign="middle"><a name="topo"><font class="cat_data_hora"><? echo "$categoria"; ?>
        - <? echo "$data2 - $hora"; ?></font><br><font class="tit"><? echo "$titulo"; ?></font><br>
        <font class="sub"><? echo "$subtitulo"; ?></font></td>
	</tr>
	<tr>
		<td valign="top" style="padding-top: 0.5em">
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
</table>
</center>
<table width="100%" border="0" cellpadding="0" cellspacing="10">
<tr><td align="right" valign="bottom"><hr color="#999999" size="1" noshade><br>
<font class="normal">&copy;2004-2006 FSM Notícias - Extraído de:
<b>www.lagunanews.net/exibir.php?noticia=<? echo "$id"; ?>
</b> - Acesso: <b><? echo "$data2 às $hora"; ?></b></font></td></tr></table>
<?
break;
}
}
}
}
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>
</body></html>
