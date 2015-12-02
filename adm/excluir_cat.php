<?php
// Incluindo o arquivo de configuração
include ("../include/conexao.php");

// Deletando os dados selecionados
@$sql = "DELETE FROM categoria WHERE id='$id'";

// Executando $sql e verificando se tudo correu certo.
@$resultado = mysql_query($sql)

// Menssagen de erro.
or die ("<font>Não foi possível realizar a exclusão dos dados.</font>
<a href=administrar.php><B>Voltar!</B>");

// Menssagem de exito.
echo "<br><br><center><font class=form>A notícia foi excluída com êxito!</center>
		<script>window.location='index.php';</script>";

?>
