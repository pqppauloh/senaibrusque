<?
$tamanho = "50000"; //tamanho m�ximo da foto em bytes

//-- conex�o da base de dados
include("../include/conexao.php");

   /* upload da imagem para o servidor */

if ($foto != "") {
if ($foto_size > $tamanho)
{die("<font color=\"red\">Arquivo da foto muito grande.</font>
     Ele deve ter $tamanho bytes ou menos.<p>Clique<a href=\"javascript:history.back()\">
     <b>aqui</b></a> para Voltar");}}

    // verifica se tem imagem sendo cadastrada
    if (trim($HTTP_POST_FILES["foto"]["tmp_name"]) != "") {

        // o arquivo � gerado com um nome que nunca se repetir� para evitar que um arquivo existente seja perdido
        // no exemplo, as fotos ficar�o dentro do diret�rio "fotos", � necess�rio que o mesmo d� permiss�o total de grava��o
        // para o usu�rio que roda o Servidor web(nobody, wwwrun s�o os mais comuns)
        $foto = 'fotos/' . md5(md5($HTTP_POST_VARS["name"]) . date("YmdHis")) . strstr(basename($HTTP_POST_FILES["foto"]["name"]), '.');

        // arquivo com o local de origem
        $orig = $HTTP_POST_FILES["foto"]["tmp_name"];

        // copia o arquivo para o destino
        if (!copy($orig, "../$foto")) {
            echo "<br><br><center>Problemas no upload do arquivo: " . $HTTP_POST_FILES["foto"]["name"] . "...<br>";
            $erro = "yes";
            $foto = "";
        }
    }

    /* montando sql de inser��o de dados */
    $sqli = " INSERT INTO noticias (categoria, titulo, subtitulo, texto, fonte, fonte_foto, data, hora, dstq, foto) VALUES
    ('" . addslashes($HTTP_POST_VARS["categoria"]) . "', '" . addslashes($HTTP_POST_VARS["titulo"]) . "', '" . addslashes($HTTP_POST_VARS["subtitulo"]) . "', '" . addslashes($HTTP_POST_VARS["texto"]) . "', '" . addslashes($HTTP_POST_VARS["fonte"]) . "', '" . addslashes($HTTP_POST_VARS["fonte_foto"]) . "', '" . addslashes($HTTP_POST_VARS["data"]) . "', '" . addslashes($HTTP_POST_VARS["hora"]) . "', '" . addslashes($HTTP_POST_VARS["dstq"]) . "', '$foto')";

    /* executa sql */
    if (!@mysql_query($sqli)) {
        echo "<br><br><center><font class='adm'>Problemas ao efetuar cadastro: " . mysql_error() . ".</font></center>";
        exit();
    } else {
        echo "<br><br><center><font class='adm'>Cadastro efetuado com sucesso!</center>
		<script>window.location='cadastrar.php';</script>";
        if ($erro == "yes") {
            echo "<br><center>A imagem n�o foi enviada ao servidor.</font></center>";
        }
        exit();
    }
?>
