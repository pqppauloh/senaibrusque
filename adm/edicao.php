<?
$id = $_POST["id"];
$categoria_n = $_POST["categoria_n"];
$titulo_n = $_POST["titulo_n"];
$subtitulo_n = $_POST["subtitulo_n"];
$texto_n = $_POST["texto_n"];
$fonte_n = $_POST["fonte_n"];
$fonte_foto_n = $_POST["fonte_foto_n"];
$data_n = $_POST["data_n"];
$hora_n = $_POST["hora_n"];
$dstq_n = $_POST["dstq_n"];

$tamanho = "50000"; //tamanho máximo da foto em bytes

//-- conexão da base de dados
require_once("../include/conexao.php");

   /* upload da imagem para o servidor */

if ($foto != "") {
if ($foto_size > $tamanho)
{die("<font color='red' class='adm'>Arquivo da foto muito grande.</font><font class='adm'>
     Ele deve ter $tamanho bytes ou menos.<p>Clique<a href='javascript:history.back()'>
     <b>aqui</b></a> para Voltar</font>");}}

    // verifica se tem imagem sendo cadastrada
    if (trim($HTTP_POST_FILES["foto"]["tmp_name"]) != "") {

        // o arquivo é gerado com um nome que nunca se repetirá para evitar que um arquivo existente seja perdido
        // no exemplo, as fotos ficarão dentro do diretório "fotos", é necessário que o mesmo dê permissão total de gravação
        // para o usuário que roda o Servidor web(nobody, wwwrun são os mais comuns)
        $foto = 'fotos/' . md5(md5($HTTP_POST_VARS["name"]) . date("YmdHis")) . strstr(basename($HTTP_POST_FILES["foto"]["name"]), '.');

        // arquivo com o local de origem
        $orig = $HTTP_POST_FILES["foto"]["tmp_name"];

        // copia o arquivo para o destino
        if (!copy($orig, "../$foto")) {
            echo "<br><br><center><font class='adm'>Problemas no upload do arquivo: " . $HTTP_POST_FILES["foto"]["name"] . "...</font><br>";
            $erro = "yes";
            $foto = "";
        }
    }

// Atualizando os dados.
$sql = "UPDATE noticias SET categoria='$categoria_n', titulo='$titulo_n', subtitulo='$subtitulo_n', texto='$texto_n', fonte='$fonte_n', data='$data_n', hora='$hora_n', dstq='$dstq_n', foto='$foto' WHERE id='$id'";

// Executando $sql e verificando se tudo ocorreu certo.
mysql_query($sql);

// Menssagem de exito.
echo "<br><br><center><font class='adm'>A notícia foi editada com êxito!</center>
		<script>window.location='index.php';</script>";
?>
