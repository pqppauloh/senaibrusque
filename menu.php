<?
//-- conex�o da base de dados
require_once("include/conexao.php");
// ------- aqui ser� implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT * FROM categoria ORDER BY id ASC";
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
$cat = $coluna["categoria"];
$rol = $coluna["categoria"];
$rol = ereg_replace("[^a-zA-Z0-9 _]", "", strtr($cat, "��������������������������'�`", "aaaaeeiooouucAAAAEEIOOOUUC"));

// agora atrav�s do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
?>
<li><a href="exibindo.php?categoria=<? echo $rol; ?>">&#187; <? echo $cat; ?></li>
<?
}
}
// e para finalizar, fechamos a conex�o com servidor MySQL
mysql_close($conn);
?>
