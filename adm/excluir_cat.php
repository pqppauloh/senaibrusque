<?php
// Incluindo o arquivo de configura��o
include ("../include/conexao.php");

// Deletando os dados selecionados
@$sql = "DELETE FROM categoria WHERE id='$id'";

// Executando $sql e verificando se tudo correu certo.
@$resultado = mysql_query($sql)

// Menssagen de erro.
or die ("<font>N�o foi poss�vel realizar a exclus�o dos dados.</font>
<a href=administrar.php><B>Voltar!</B>");

// Menssagem de exito.
echo "<br><br><center><font class=form>A not�cia foi exclu�da com �xito!</center>
		<script>window.location='index.php';</script>";

?>
