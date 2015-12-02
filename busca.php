<? include ("include/topo.php"); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top: 0.3em">
<?php
//conecta ao mysql
include("include/conexao.php");

if(!empty($HTTP_POST_VARS[palavra])) {
      $palavra = str_replace(" ", "%", $HTTP_POST_VARS[palavra]); /* Altera os espa�os adicionando no lugar o simbolo % */
      $y = "SELECT * FROM noticias WHERE texto LIKE '%".$palavra."%' ORDER BY categoria AND data DESC";
      $x = mysql_query($y); // Executa a query no Banco de Dados
      $total = mysql_num_rows($x); // Conta o total ded resultados encontrados
?>
<tr><td class="preto" style="padding-left: 0.2em; padding-bottom: 1.5em">Encontrado(s) <font color="red"><? echo "$total"; ?></font> resultado(s) da busca por <font color="red"><? echo "$palavra"; ?></font></td></tr>
<?php
while($r = mysql_fetch_array($x)) {
$titulo = $r['titulo'];
$foto = $r['foto'];
$limit=64;
$titulo = substr($titulo, 0,$limit);
$titulo = stripslashes($titulo);
?>
<p>
<?php
if ($foto==''){
echo "<tr><td aling='left' valign='middle' style='padding-top: 0.2em; padding-left: 0.2em'>
      <font class='cat_data_hora'>".$r['categoria']. "&nbsp;-&nbsp;" .$r['data']."</font><br>
      <a href='exibir.php?noticia=".$r['codigo']."' class='sub'>$titulo...</a> <img src='img/not.gif' width='14' height='14' alt='NOT�CIA SOMENTE COM TEXTO'></td></tr>";
}else{
echo "<tr><td aling='left' valign='middle' style='padding-top: 0.2em; padding-left: 0.2em'>
      <font class='cat_data_hora'><b>".$r['categoria']. "</b>&nbsp;&nbsp;-&nbsp;&nbsp; " .$r['data']."</font><br>
      <a href='exibir.php?noticia=".$r['codigo']."' class='sub'>$titulo...</a> <img src='img/maq.gif' width='14' height='14' alt='NOT�CIA COM IMAGEM'></td></tr>";
}
}
}
?>
</table>
<?php include ("buscador.php"); ?>
<?php include ("include/base.php"); ?>
