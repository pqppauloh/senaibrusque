<? include ("../include/topo_adm.php"); ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");

$busca = "SELECT * FROM categoria";
$total_reg = "35"; // n�mero de registros por p�gina
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysql_query("$busca ORDER BY id DESC LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos); // verifica o n�mero total de registros
$tp = $tr / $total_reg; // verifica o n�mero total de p�ginas
?>
<tr><td align="left" colspan="2" style="padding-left: 0.2em; padding-bottom: 0.5em; padding-top: 0.3em" class="preto">
<? echo "$data"; ?>
</td></tr>
<?
// vamos criar a visualiza��o
while ($dados = mysql_fetch_array($limite)) {
$id = $dados["id"];
$categoria = $dados["categoria"];
echo "<tr style='padding-top: 0.3em'>
         <td width='89%'><a href='../exibir.php?noticia=$id' class='preto' style='padding-left: 0.2em'>$categoria</a></td>
         <td width='11%' align='center' valign='middle'><a href='excluir_cat.php?noticia=$id' style='padding-top: 0.3em'><img src='../img/excluir.png' width='16' height='16' border='0' title='EXCLUIR CATEGORIA' alt='EXCLUIR CATEGORIA'></a></td>
         </tr>";
}
// agora vamos criar os bot�es "Anterior e pr�ximo"
$intervalo = 35;
$anterior = $pc -1;
$proximo = $pc +1;
$flag1 = floor($pc/$intervalo);
$pi = ($flag1 * $intervalo );
$pf = $pi + $intervalo;

echo "<tr><td colspan='3' align='center' style='padding-left: 0.2em; padding-top: 1.5em; padding-bottom: 1em'>";

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
echo "&nbsp;<a href='?pagina=$proximo' class='categoria'>Pr�xima &#187;</a>";
}else{
echo "&nbsp;<font class='categoria' style='color: #FFFFFF'>Pr�xima &#187;</font>";
}
// e para finalizar, fechamos a conex�o com servidor MySQL
mysql_close($conn);
?>
</td></tr>
</table>
<? include ("../include/base.php"); ?>
