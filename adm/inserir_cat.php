<?

//-- conexão da base de dados
require_once("../include/conexao.php");

/* verifica se os dados obrigatórios foram informados */
if (trim($HTTP_POST_VARS["categoria"]) == "") {
    echo "<br><br><center>Problemas ao efetuar cadastro: <b>CATEGORIA</b> é um campo obrigatório!</center>";
    exit();
}
        
    /* montando sql de inserção de dados */    
    $sqli = " INSERT INTO
                categoria
              (
                categoria
              )
              VALUES
              (
                '" . addslashes($HTTP_POST_VARS["categoria"]) . "'
              )
            ";

    /* executa sql */
    if (!@mysql_query($sqli)) {
        echo "<br><br><center><font class=form>Problemas ao efetuar cadastro: " . mysql_error() . ".</font></center>";
        exit();
    } else {
        echo "<br><br><center><font class='adm'>Cadastro efetuado com sucesso!</center>
		<script>window.location='index.php';</script>";
        exit();
    }
?>

