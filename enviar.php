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
</head>
<body>
<?
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id,titulo FROM noticias";
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
$titulo = $coluna["titulo"];
// Aqui implementamos um limitador do número de letrar a
//serem exibidas na última notícia com imagem
// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
switch ($noticia) {
case "$id":
?>
<center><form action="envia_not.php" method="post">
  <table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr>
        <td bgcolor="#C5D2E2" align="center" valign="middle" colspan="2">
        <font style="font-weight: bold; font-size: 16px">ENVIO DE NOTÍCIA VIA E-MAIL</font>
        </td>
    </tr>
	<tr>
		<td style="padding-left: 0.3em">
         <div class="preto">SEU NOME:</div>
         <input type="text" name="seu_nome" class="form" size="24"><br>
	     <div class="preto">SEU E-MAIL:</div>
	     <input type="text" name="seu_email" class="form" size="24"><br>
	     <div class="preto">NOME DO DESTINATÁRIO:</div>
	     <input type="text" name="para_nome" class="fomr" size="24"><br>
	     <div class="preto">NOME DO DESTINATÁRIO:</div>
	     <input type="text" name="para_email" class="fomr" size="24">
	     </td>
		<td>
		<div class="preto">SEU COMENTÁRIO</div>
		<textarea name="comentarios" cols="20" rows="6" class="msg"></textarea>
		<input type="hidden" name="url" value="http://www.seusite.com.br/exibir.php?noticia=<? echo $codigo; ?>">
	    <input type="hidden" name="titulo" value="<? echo $titulo; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Enviar" class="submit">
		<input type="reset" value="Redefinir" class="submit"></td>
	</tr>
</table>
</form></center>
<?
}
}
}
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>
</body></html>
