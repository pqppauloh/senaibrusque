<?php
include ('../include/topo_adm.php');
?>
<?php
// Incluindo o arquivo de configura��o
include ("../include/conexao.php");

// Deletando os dados selecionados
@$sql = "DELETE FROM noticias WHERE id='$id'";

// Executando $sql e verificando se tudo correu certo.
@$resultado = mysql_query($sql)

// Menssagen de erro.
or die ("<font class='adm' color='red'>N�o foi poss�vel realizar a exclus�o dos dados.</font><p>
<a href='javascript:window.history.go(-1)'><B class='preto'><font size='2' color='red'>voltar!</font></B></p>");

// Menssagem de exito.
echo "<br><br><center><font class='adm' color='red'>A not�cia foi exclu�da com �xito!<p>
       </font><a href='index.php' class='preto'>IR PARA A P�GINA ADMINISTRATIVA</a></center></p>";
?>
<? include ('../include/base.php'); ?>
