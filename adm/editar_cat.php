<? include ("../include/topo_adm.php"); ?>
<form method="post" action="edicao_cat.php?id=$id">
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
switch ($categoria) {
case "$id":

?>
<table width="494" border="0" align="center" cellpadding="0" cellspacing="6">
            <tr>
                <td align="center" colspan="2" valign="middle" style="padding-top: 0.5em; font-weight: bold; font-size: 14px">
                EDI��O DAS NOT�CIAS</td>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Categoria:</td>
                <td width="251" align="left"><input type="text" name="categoria_n" value="<? echo $categoria; ?>" size="48" maxlength="70" class="msg">
                </td>
            </tr>
            <tr>
            <tr>
                <td align="center" colspan="2"><br>
                    <input type="Submit" name="salvar" value="Editar Categoria" class="submit">
                    <input type="hidden" name="id" value="<? echo $id; ?>">
                </td>
            </tr>
      </table>
<?
}
}
}
?>
</form>
<? include ("../include/base.php"); ?>
