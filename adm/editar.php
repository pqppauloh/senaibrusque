<? include ("../include/topo_adm.php"); ?>
<form method="post" action="edicao.php?id=$id" enctype="multipart/form-data">
<?
// Conex�o com a base de dados
//-- conex�o da base de dados
require_once("../include/conexao.php");
// ------- aqui ser� implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT * FROM noticias";
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
$titulo = $coluna["titulo"];
$subtitulo = $coluna["subtitulo"];
$texto = $coluna["texto"];
$fonte = $coluna["fonte"];
$fonte_foto = $coluna["font_foto"];
$data = $coluna["data"];
$hora = $coluna["hora"];
$dstq = $coluna["dstq"];
$foto = $coluna["foto"];
$texto = stripslashes($texto);
// agora atrav�s do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
switch ($noticia) {
case "$id":

?>
<table width="566" border="0" align="center" cellpadding="0" cellspacing="6">
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
                <td align="right" width="215" class="adm">T�tulo:</td>
                <td width="251" align="left"><input type="text" name="titulo_n" value="<? echo $titulo; ?>" size="48" maxlength="70" class="msg"></td>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Subt�tulo:</td>
                <td align="left"><input type="text" name="subtitulo_n" value="<? echo $subtitulo; ?>" size="48" maxlength="70" class="msg"></td>
            </tr>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Texto completo:</td>
                <td align="left">
                <textarea name="texto_n" rows=10 cols=45 maxlength="60" class="msg"><? echo "$texto"; ?></textarea></td>
            </tr>
            <tr>
            <td align="right" width="215" align="center" valign="middle" class="adm">Imagem Atual</td><td align=left>

<?
if ($foto == "") {
echo "<font class='adm'><font color=red><b>nesta not�cia n�o h� imagem!</font></font>";
} else {
echo "<img src=../$foto>";
}
?>
</td></tr>
            <tr>
                <td align="right" width="215" class="adm">Nova Imagem:</td>
                <td align="left">
                <input type="File" name="foto" size="17" class="msg">
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Fonte:</td>
                <td width="251" align="left"><input type="text" name="fonte_n" value="<? echo $fonte; ?>" size="15" maxlength="65" class="msg"></td>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Fot�grafo:</td>
                <td width="251" align="left"><input type="text" name="fonte_foto_n" value="<? echo $fonte; ?>" size="15" maxlength="65" class="msg"></td>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Data:</td>
                <td width="251" align="left"><input type="text" name="data_n" value="<? echo $data; ?>" size="15" maxlength="65" class="msg"></td>
            </tr>
            <tr>
                <td align="right" width="215" class="adm">Hora:</td>
                <td width="251" align="left"><input type="text" name="hora_n" value="<? echo $hora; ?>" size="15" maxlength="65" class="msg">
                </td>
            </tr>
            <tr>
                <td align="right" width="210" class="adm">O status atual da not�ca �:</td>
                <td width="450" align="left" class="adm">
                <font class='adm'><font color=red><b><? echo $dstq; ?></b></font>
                </td>
            </tr>
            <tr>
                <td align="right" width="210" class="adm">Not�cia Destaque?</td>
                <td width="450" align="left" class="adm">
                SIM<input type="radio" class="form" name="dstq" value="sim">&nbsp;&nbsp;
                N�O<input type="radio" class="form" name="dstq" value="n�o">
                <input type="hidden" name="id" value="<? echo $id; ?>">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2"><br>
                    <input type="Submit" name="salvar" value="Editar" class="submit">
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
