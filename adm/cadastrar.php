<?
include ("../include/topo_adm.php");
include ("../include/data_hora.php");
?>
<form method="post" action="inserir.php" enctype="multipart/form-data">
        <table width="494" border="0" align="center" cellpadding="0" cellspacing="3">
            <tr>
                <td align="center" valign="middle" colspan="2" style="padding-bottom: 1em">
                <font style="font-family:'times new roman'; font-weight: bold; font-size: 16px">CADASTRO DE NOTÍCIAS</font></td>
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Categoria:</td>
                <? include ("lista_cat.php"); ?>
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Título:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="titulo" value="" size="34" maxlength="100">
                </td>
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Subtítulo:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="subtitulo" value="" size="34" maxlength="120">
                </td>
            </tr>
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Texto completo:</td>
                <td width="450" align="left">
                <textarea name="texto" class="msg" value="" rows="10" cols="31" maxlength="60"></textarea></td>
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Imagem:</td>
                <td width="450" align="left">
                <input class="form" type="File" name="foto" size="17">
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Fonte:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="fonte" size="17" value="">
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Fotógrafo:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="fonte_foto" size="17" value="">
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Data:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="data" size="17" value="<? echo $data2; ?>">
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Hora:</td>
                <td width="450" align="left">
                <input type="text" class="form" name="hora" size="17" value="<? echo $hora; ?>">
            </tr>
            <tr>
                <td align="right" width="210" class="preto">Notícia Destaque?</td>
                <td width="450" align="left" class="preto">
                SIM<input type="radio" class="form" name="dstq" value="sim">&nbsp;&nbsp;
                NÃO<input type="radio" class="form" name="dstq" value="não">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2" style="padding-top: 2em">
                    <input class="submit" type="Submit" name="salvar" value="Cadastrar">
                    <input class="submit" type="Reset" name="limpar" value="Limpar">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2" style="padding-left: 3em; padding-top: 2em; padding-bottom: 1em"><div align="justify" class="preto">
                <?
                echo "<b style='color: red'>Observação</b>: Será inserido automaticamente no seu cadastro a data e a hora em que você acessou esta página! - ";
                echo "Data: $data2 - Hora: $hora.<br>Caso você desejar alterá-la, basta modificá-la nos campos <b>data</b> e <b>hora</b>.</font>";
                ?>
                </div><td>
            </tr>
      </table>
    </form>
<? include ("../include/base.php"); ?>
