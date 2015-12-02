<?
$id = $_POST["id"];
$categoria_n = $_POST["categoria_n"];

//-- conexão da base de dados
require_once("../include/conexao.php");

// Atualizando os dados.
$sql = "UPDATE categoria SET categoria='$categoria_n' WHERE id='$id'";

// Executando $sql e verificando se tudo ocorreu certo.
mysql_query($sql);

// Menssagem de exito.
echo "<br><br><center><font class='adm'>A categoria foi editada com êxito!</center>
		<script>window.location='index.php';</script>";
?>
