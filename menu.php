<?
//-- conexão da base de dados
require_once("include/conexao.php");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT * FROM categoria ORDER BY id ASC";
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
$cat = $coluna["categoria"];
$rol = $coluna["categoria"];
$rol = ereg_replace("[^a-zA-Z0-9 _]", "", strtr($cat, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ'´`", "aaaaeeiooouucAAAAEEIOOOUUC"));

// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
?>
<li><a href="exibindo.php?categoria=<? echo $rol; ?>">&#187; <? echo $cat; ?></li>
<?
}
}
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>
