<? include ("../include/topo_adm.php"); ?>
<form method="post" action="edicao_cat.php?id=$id">
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
switch ($categoria) {
case "$id":

?>
<table width="494" border="0" align="center" cellpadding="0" cellspacing="6">
            <tr>
                <td align="center" colspan="2" valign="middle" style="padding-top: 0.5em; font-weight: bold; font-size: 14px">
                EDIÇÃO DAS NOTÍCIAS</td>
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
