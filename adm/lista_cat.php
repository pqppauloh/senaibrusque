<td width="450" align="left">
<select name="categoria" class="form">
<option selected>SELECIONE UMA CATEGORIA</option>
<?
include ("../include/conexao.php");
// ------- aqui ser� implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id,categoria FROM categoria ORDER BY categoria ASC";
// agora utilizando a �ltima fun��o apresentada, faremos a
// execu��o consequentemente ser� criada a nossa tabela
$query = @mysql_query($sql);
// note que novamente foi utilizado o @(arroba) a frente da fun��o
// agora faremos um teste para verificar se a fun��o mysql_query
// foi bem sucedida
if (!$query){
die ("Problemas ao executar o sql !!!");
} else {
// neste ponto, faremos o tratamento das informa��es retornadas
// pela execu��o do sql de sele��o de dados
while ($coluna = @mysql_fetch_array($query)){
// esta atribui��o de coluna["coluna_da_tabela"] a uma
// variavel se d� pelo fato apenas de simplificar o
// entendimento do que est� se fazendo
$id = $coluna["id"];
$categoria = $coluna["categoria"];
// agora atrav�s do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
?>
<option value=<? echo $categoria; ?>><? echo $categoria; ?></option>
<?
}
}
// e para finalizar, fechamos a conex�o com servidor MySQL
mysql_close($conn);
?>
</select>
</td>
