<? include ("./include/topo.php"); ?>
<?php
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");

$busca = "SELECT * FROM noticias";
$total_reg = "25"; // n�mero de registros por p�gina
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysql_query("$busca WHERE categoria = '$categoria' ORDER BY data DESC LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca WHERE categoria = '$categoria'");

$tr = mysql_num_rows($todos); // verifica o n�mero total de registros
$tp = $tr / $total_reg; // verifica o n�mero total de p�ginas

// vamos criar a visualiza��o
while ($dados = mysql_fetch_array($limite)) {
$id = $dados["id"];
$categoria = $dados["categoria"];
$titulo = $dados["titulo"];
$data = $dados["data"];
$hora = $dados["hora"];
$foto = $dados["foto"];
$titulo = stripslashes($titulo);
$subtitulo = stripslashes($subtitulotitulo);
// Aqui implementamos um limitador do n�mero de letrar a
//serem exibidas na �ltima not�cia com imagem
$limit=62;
$titulo = substr($titulo, 0,$limit);
if ($foto=='') {
echo "<div id='lista'>$categoria - $data<br />
     $hora - <a href='exibir.php?noticia=$id'>$titulo...</a><img src='img/not.gif' width='14' height='14' title='NOT�CIA SOMENTE COM TEXTO' alt='NOT�CIA SOMENTE COM TEXTO'></div>";
} else {
echo "<div id='lista'>$categoria<br />
     $hora - <a href='exibir.php?noticia=$id'>$titulo...</a><img src='img/maq.gif' width='14' height='14' border='0' title='NOT�CIA COM IMAGEM' alt='NOT�CIA COM IMAGEM'></div>";
     }
}
// agora vamos criar os bot�es "Anterior e pr�ximo"
$intervalo = 25;
$anterior = $pc -1;
$proximo = $pc +1;
$flag1 = floor($pc/$intervalo);
$pi = ($flag1 * $intervalo );
$pf = $pi + $intervalo;

echo "<div id='id'>";

if ($pc > 1) {
echo "<a href='?pagina=$anterior' class='datahora2'>&#171; Anterior</a> ";
}else{
echo "<font class='preto' style='color: #FFFFFF'>&#171; Anterior&nbsp;</font>";
}
if ($pc > 1) {
echo "<font class='preto'>|</font>";
}else{
echo "";
}

for ($pi; $pi < $pf; $pi++) {
// Se n�mero da p�gina for menor que total de p�ginas
if ($pi <= $tp) {
if ($pc == $pi) {
// se p�gina atual for igual a p�gina selecionada
if ($pi > "0") {
echo "<b class='preto'>" . $pi . "</b>&nbsp;";
}
} else {
// se for diferente, aparece o link para a p�gina
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
echo "&nbsp;<a href='?pagina=$proximo' class='datahora2'>Pr�xima &#187;</a>";
}else{
echo "&nbsp;<font class='preto' style='color: #FFFFFF'>Pr�xima &#187;</font>";
}
echo "</div>";
// e para finalizar, fechamos a conex�o com servidor MySQL
mysql_close($conn);
?>
<? include ("./include/base.php"); ?>

