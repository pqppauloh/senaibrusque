<?php
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");

$busca = "SELECT * FROM noticias";
$total_reg = "25"; // número de registros por página
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

include ("include/data_hora.php");

$limite = mysql_query("$busca ORDER BY id DESC LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos); // verifica o número total de registros
$tp = $tr / $total_reg; // verifica o número total de páginas
?>
<div id="nave">
<? echo "$data"; ?></div>
<?
// vamos criar a visualização
while ($dados = @mysql_fetch_array($limite)){
$id = $dados["id"];
$categoria = $dados["categoria"];
$titulo = $dados["titulo"];
$data = $dados["data"];
$hora = $dados["hora"];
$foto = $dados["foto"];
$titulo = stripslashes($titulo);
$subtitulo = stripslashes($subtitulotitulo);
// Aqui implementamos um limitador do número de letrar a
//serem exibidas na última notícia com imagem
$limit=80;
$titulo = substr($titulo, 0,$limit);
if ($foto=='') {
echo "<div id='lista'>
      $hora - <a href='exibir.php?noticia=$id'>$titulo</a> <img src='img/not.gif' width='14' height='14' title='NOTÍCIA SOMENTE COM TEXTO' alt='NOTÍCIA SOMENTE COM TEXTO\'></div>";
} else {
echo "<div id='lista'>
      $hora - <a href='exibir.php?noticia=$id'>$titulo</a> <img src='img/maq.gif' width='14' height='14' title='NOTÍCIA SOMENTE COM TEXTO' alt='NOTÍCIA SOMENTE COM IMAGEM\'></div>";
     }
}
// agora vamos criar os botões "Anterior e próximo"
$intervalo = 25;
$anterior = $pc -1;
$proximo = $pc +1;
$flag1 = floor($pc/$intervalo);
$pi = ($flag1 * $intervalo );
$pf = $pi + $intervalo;

echo "<div id='nave'>";

if ($pc > 1) {
echo "<a href='?pagina=$anterior' class='categoria'>&#171; Anterior</a> ";
}else{
echo "<font class='categoria' style='color: #FFFFFF'>&#171; Anterior&nbsp;</font>";
}
if ($pc > 1) {
echo "<font class='preto'>|</font>";
}else{
echo "";
}

for ($pi; $pi < $pf; $pi++) {
// Se número da página for menor que total de páginas
if ($pi <= $tp) {
if ($pc == $pi) {
// se página atual for igual a página selecionada
if ($pi > "0") {
echo "<b class='preto'>" . $pi . "</b>&nbsp;";
}
} else {
// se for diferente, aparece o link para a página
if ($pi > "0") {
echo "<a href='?pagina=" . $pi . "' class='preto'>" . $pi . "</a>&nbsp;";
}

}
}
}
if ($pc < $tp) {
echo "<font class='preto'>|</font>";
}else{
echo "";
}
if ($pc < $tp) {
echo "&nbsp;<a href='?pagina=$proximo' class='categoria'>Próxima &#187;</a>";
}else{
echo "&nbsp;<font class='categoria' style='color: #FFFFFF'>Próxima &#187;</font>";
}
echo "</div>";
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>


