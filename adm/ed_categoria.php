<? include ("../include/topo_adm.php"); ?>
<table width="566" border="0" align="center" cellpadding="0" cellspacing="6">
            <tr>
                <td align="center" valign="middle" colspan="2" style="padding-bottom: 1em">
                <font style="font-family:'times new roman'; font-weight: bold; font-size: 16px">EDITAR CATEGORIA</font></td>
            </tr>
<?
// Conexão com a base de dados
//-- conexão da base de dados
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id,categoria FROM categoria";
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
       echo"<tr>
            <td width='89%' class='preto'>$categoria</td>
            <td width='11%' align='center' valign='middle'><a href='editar_cat.php?categoria=$id' style='padding-top: 0.3em'><img src='../img/editar.png' width='16' height='16' border='0' title='EDITAR CATEGORIA' alt='EDITAR CATEGORIA'></a></td>
            </tr>";
}
}
?>
      </table>
<? include ("../include/base.php"); ?>
