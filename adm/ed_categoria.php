<? include ("../include/topo_adm.php"); ?>
<table width="566" border="0" align="center" cellpadding="0" cellspacing="6">
            <tr>
                <td align="center" valign="middle" colspan="2" style="padding-bottom: 1em">
                <font style="font-family:'times new roman'; font-weight: bold; font-size: 16px">EDITAR CATEGORIA</font></td>
            </tr>
<?
// Conex�o com a base de dados
//-- conex�o da base de dados
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");
// ------- aqui ser� implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT id,categoria FROM categoria";
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
       echo"<tr>
            <td width='89%' class='preto'>$categoria</td>
            <td width='11%' align='center' valign='middle'><a href='editar_cat.php?categoria=$id' style='padding-top: 0.3em'><img src='../img/editar.png' width='16' height='16' border='0' title='EDITAR CATEGORIA' alt='EDITAR CATEGORIA'></a></td>
            </tr>";
}
}
?>
      </table>
<? include ("../include/base.php"); ?>
