<? include ("../include/topo_adm.php"); ?>
		<!-- início do formulário de cadastro de categoria -->
		<form name="categoria" action="inserir_cat.php" method="post">
		<table border="0" width="494" height="350" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2" align="center" valign="middle">
                <font style="font-family:'times new roman'; font-weight: bold; font-size: 16px">CADASTRO DE NOVA CATEGORIA</font>
				</td>
			</tr>
			<tr>
				<td width="200" align="right" style="padding-right: 1em; padding-top: 2em; padding-top:3px;" class="preto" valign="middle">Nome da Categoria</td>
				<td width="294" align="left"><input type="text" name="categoria" size="34" class="form"></td>
			</tr>
			<tr>
				<td colspan="2" align="center" valign="middle">
				<input type="Submit" value="Cadastrar" name="enviar" class="submit">
				<input type="Reset" value="Limpar" name="limpar" class="submit">
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2" style="padding-left: 3em; padding-top: 2em">
                <div align="justify" class="preto"><b style="color: red">Observação</b>: Por questões estéticas, recomendamos que
                o nome da nova categoria seja digitado em caixa alta.</font></div>
                <td>
            </tr>
		</table>
		</form>
		<!-- fim do formulário de cadastro de categoria -->
<? include ("../include/base.php"); ?>
