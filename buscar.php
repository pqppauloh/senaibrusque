<?php include ("include/topo.php"); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="padding-top: 0.3em">
<?php
$por = $_POST['por'];
$valor = $_POST['valor'];
if (empty($por) || empty($valor)){
echo "Voce nao preencheu os campos da busca";
}
else{
global $por;
global $valor;
if($por==texto){
mysql_connect("localhost","laguna_news","guto75");
mysql_select_db("laguna_fsm");
$sql=mysql_query("SELECT id,categoria,titulo,texto,data FROM noticias WHERE texto LIKE '%$valor%' ORDER BY data DESC");
$linhas=@mysql_num_rows($sql);
}
if($por==titulo){
mysql_connect("localhost","laguna_news","guto75");
mysql_select_db("laguna_fsm");
$sql=mysql_query("SELECT id,categoria,titulo,texto,data FROM noticias WHERE titulo LIKE '%$valor%' ORDER BY data DESC");
}
if($por==data){
mysql_connect("localhost","laguna_news","guto75");
mysql_select_db("laguna_fsm");
$sql=mysql_query("SELECT ido,categoria,titulo,texto,data FROM noticias WHERE data LIKE '%$valor%' ORDER BY data DESC");
}
$linhas=@mysql_num_rows($sql);
if ($linhas==0){
echo "<BR><BR><BR><p align='center'><h2><b>N�o</b> H� Resultados com essa Pesquisa</p></h2><br>";
}
?>
<tr><td class="preto" style="padding-left: 0.2em; padding-bottom: 1.5em">Encontrado(s) <font color="red"><? echo "$linhas"; ?></font> resultado(s) da busca por <font color="red"><? echo "$valor"; ?></font></td></tr>
<?php
if ($linhas >=1){
while ($reg = mysql_fetch_array($sql)){
$id = $reg['id'];
$categoria = $reg['categoria'];
$texto = $reg['texto'];
$data = $reg['data'];
$foto = $r['foto'];
$titulo = $reg['titulo'];
$titulo = stripslashes($titulo);
$limit=64;
$titulo = substr($titulo, 0,$limit);

if ($foto==''){
echo "<tr><td aling='left' valign='middle' style='padding-top: 0.2em; padding-left: 0.2em'>
      <font class='cat_data_hora'><b>$categoria</b> - $data</font><br>
      <a href='exibir.php?noticia=$id' class='sub'>$titulo...</a> <img src='img/not.gif' width='14' height='14' alt='NOT�CIA SOMENTE COM TEXTO'></td></tr>";
}else{
echo "<tr><td aling='left' valign='middle' style='padding-top: 0.2em; padding-left: 0.2em'>
      <font class='cat_data_hora'><b>$categoria</b> - $data</font><br>
      <a href='exibir.php?noticia=$id' class='sub'>$titulo...</a> <img src='img/maq.gif' width='14' height='14' alt='NOT�CIA COM IMAGEM'></td></tr>";
        }
       }
     }
   }
?>
</table>
<?php include ("buscador.php"); ?>
<?php include ("include/base.php"); ?>
