<td width="450" align="left">
<select name="categoria" class="form">
<option selected>SELECIONE UMA CATEGORIA</option>
<?
include ("../include/conexao.php");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id,categoria FROM categoria ORDER BY categoria ASC";
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
// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
?>
<option value=<? echo $categoria; ?>><? echo $categoria; ?></option>
<?
}
}
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>
</select>
</td>
