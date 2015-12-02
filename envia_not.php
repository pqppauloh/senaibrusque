<?
//Esta área é onde seus dados devem ser atualizados

$nome_do_site = "Nome do seu Site"; //Nome do seu Website
$end_do_site = "http://www.seusite.com.br"; //Endereço do seu Website
$nome_do_webmaster = "Nome do Webmaster"; //Seu Nome - Nome do Webmaster

//Não Modifique este trecho pois aqui estaram contidos os dados da indicação!

$nome_enviando = $_POST["seu_nome"]; 
$email_enviando = $_POST["seu_email"];
$nome_destinatario = $_POST["para_nome"];
$email_destinatario = $_POST["para_email"];
$comentarios = $_POST["comentarios"];
$url = $_POST["url"];
$titulo = $_POST["titulo"];
$assunto = "$nome_enviando indicou uma notícia para você!!!";

//Esta Parte contém a mensagem que será enviada para o destinatário!
//Caso você deseje modificar bastar manter a mensagem entre os parenteses " " e para pular uma linha basta escrever \n

$mensagem .= "Olá, $nome_destinatario\n\n";
$mensagem .= "$nome_enviando acaba de visitar nosso site e encontrou uma notícia que pode lhe interessar.\n";
$mensagem .= "$titulo\n";
$mensagem .= "Para lê-la na íntegra, acesse a página $url\n";
$mensagem .= "Nós do $nome_do_site estamos esperando por uma visita sua!\n\n";
$mensagem .= "O $nome_enviando, ainda fez o seguinte comentário: $comentarios.\n\n";
$mensagem .= "Visite-nos agora mesmo e leia esta notícia!!!\n\n";
$mensagem .= "Muito Obrigado,\n$nome_do_webmaster - Webmaster $nome_do_site";

//Não Modifique esta parte pois o código abaixo que envia o e-mail para o destinatário!
@mail($email_destinatario, $assunto, $mensagem, "From: $email_enviando");

header("Location:ok.php");

?>
