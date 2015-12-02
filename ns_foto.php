<?
$conn = mysql_connect("localhost","laguna_news","guto75");
$banco = mysql_select_db("laguna_fsm");
// ------- aqui será implementada nossa proposta ------ //
// neste momento estamos montando o comando sql para
// podermos selecionar os dados de nossa tabela no banco de dados
$sql = "SELECT * FROM noticias WHERE foto='' AND dstq='sim' ORDER BY id DESC LIMIT 3";
// agora utilizando a última função apresentada, faremos a
// execução consequentemente será criada a nossa tabela
$query = @mysql_query($sql);
// note que novamente foi utilizado o @(arroba) a frente da função
// agora faremos um teste para verificar se a função mysql_query
// foi bem sucedida
if (!$query){
die ("Problemas ao executar o sql !!!");
} else {
// neste ponto, faremos o tratamento das informações retornadas
// pela execução do sql de seleção de dados
while ($coluna = @mysql_fetch_array($query)){
// esta atribuição de coluna["coluna_da_tabela"] a uma
// variavel se dá pelo fato apenas de simplificar o
// entendimento do que está se fazendo
$id = $coluna["id"];
$titulo = $coluna["titulo"];
$subtitulo = $coluna["subtitulo"];
$texto = $coluna["texto"];
$foto = $coluna["foto"];
$titulo = stripslashes($titulo);
$subtitulo = stripslashes($subtitulo);
$texto = stripslashes($texto);
// Aqui implementamos um limitador do número de letrar a
//serem exibidas na última notícia com imagem
$limite=40;
$titulo = substr($titulo, 0,$limite);
$limite=135;
$texto = substr($texto, 0,$limite);
// agora através do comando echo pertencente ao PHP
// iremos apresentar os dados selecionados, na tela
if ($foto == "") {
?>
<div id="div_sfoto">
    <div id="titulo">
    <a href="exibir.php?noticia=<? echo $id; ?>"><? echo $titulo; ?></a>
    </div>
    <div id="l_texto">
    <a href="exibir.php?noticia=<? echo $id; ?>"><? echo $texto; ?>...</a>
    </div>
</div>
<?
}
}
}
// e para finalizar, fechamos a conexão com servidor MySQL
mysql_close($conn);
?>
