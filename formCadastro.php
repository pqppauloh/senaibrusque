<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
      
    </head>
    <body>
    <header class="jumbotron text-center" id="topo">
      
     
        
            <form role="form" class="form-inline" action="cadastro.php" method="post" id="cadas">
                <!-- Gerador de Bootstrap Form 
                     http://embed.plnkr.co/ZrnnkFR3Yv9HGQHrRMiW/preview -->
                <!-- Em caso de sucesso na validação: <div class="form-group has-feedback has-success"> -->
                <!-- Em caso de falha na validação: <div class="form-group has-feedback has-error"> -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="seunome@provedor.com.br" size="40px" name="email"/>
                    <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
                </div>
                <button type="submit" class="btn btn-success" name="btn">Cadastrar</button>
            </form>
    </header>
</body>
</html>
