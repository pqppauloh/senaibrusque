<?
//Esta �rea � onde seus dados devem ser atualizados

$nome_do_site = "Nome do seu Site"; //Nome do seu Website
$end_do_site = "http://www.seusite.com.br"; //Endere�o do seu Website
$nome_do_webmaster = "Nome do Webmaster"; //Seu Nome - Nome do Webmaster

//N�o Modifique este trecho pois aqui estaram contidos os dados da indica��o!

$nome_enviando = $_POST["seu_nome"]; 
$email_enviando = $_POST["seu_email"];
$nome_destinatario = $_POST["para_nome"];
$email_destinatario = $_POST["para_email"];
$comentarios = $_POST["comentarios"];
$url = $_POST["url"];
$titulo = $_POST["titulo"];
$assunto = "$nome_enviando indicou uma not�cia para voc�!!!";

//Esta Parte cont�m a mensagem que ser� enviada para o destinat�rio!
//Caso voc� deseje modificar bastar manter a mensagem entre os parenteses " " e para pular uma linha basta escrever \n

$mensagem .= "Ol�, $nome_destinatario\n\n";
$mensagem .= "$nome_enviando acaba de visitar nosso site e encontrou uma not�cia que pode lhe interessar.\n";
$mensagem .= "$titulo\n";
$mensagem .= "Para l�-la na �ntegra, acesse a p�gina $url\n";
$mensagem .= "N�s do $nome_do_site estamos esperando por uma visita sua!\n\n";
$mensagem .= "O $nome_enviando, ainda fez o seguinte coment�rio: $comentarios.\n\n";
$mensagem .= "Visite-nos agora mesmo e leia esta not�cia!!!\n\n";
$mensagem .= "Muito Obrigado,\n$nome_do_webmaster - Webmaster $nome_do_site";

//N�o Modifique esta parte pois o c�digo abaixo que envia o e-mail para o destinat�rio!
@mail($email_destinatario, $assunto, $mensagem, "From: $email_enviando");

header("Location:ok.php");

?>
