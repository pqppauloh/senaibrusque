<?
//*************************************************************************************//
// Data Inteligente1.0
// Esse script, mostra a data e a hora em formato brasileiro,
// em qualquer parte do mundo.
// Por exemplo, se seu site est� hospedado em um servidor onde a hora � diferente da sua,
// Voc� pode ajustar para mostrar o seu hor�rio, sem diferen�as no fuso!
//
//
// Escrito por Spetson Serikava, http://trd-clan.fragism.com
//**************************************************************************************//

$fuso = 2; //diferen�a entre voc� e o servidor onde est� sua p�gina
$fator = "-"; // coloque +, se seu hor�rio est� na frente do servidor, ou coloque - se seu
//hor�rio estiver atr�s do servidor.

#pronto, daqui para baixo n�o tem mais o que configurar.

$diasemana[0] = "Domingo";
$diasemana[1] = "Segunda-feira";
$diasemana[2] = "Ter�a-feira";
$diasemana[3] = "Quarta-feira";
$diasemana[4] = "Quinta-feira";
$diasemana[5] = "Sexta-feira";
$diasemana[6] = "S�bado";

$mesnome[1] = "janeiro";
$mesnome[2] = "fevereiro";
$mesnome[3] = "mar�o";
$mesnome[4] = "abril";
$mesnome[5] = "maio";
$mesnome[6] = "junho";
$mesnome[7] = "julho";
$mesnome[8] = "agosto";
$mesnome[9] = "setembro";
$mesnome[10] = "outubro";
$mesnome[11] = "novembro";
$mesnome[12] = "dezembro";

$mesn[1] = "1";
$mesn[2] = "02";
$mesn[3] = "03";
$mesn[4] = "04";
$mesn[5] = "05";
$mesn[6] = "06";
$mesn[7] = "07";
$mesn[8] = "08";
$mesn[9] = "09";
$mesn[10] = "10";
$mesn[11] = "11";
$mesn[12] = "12";

$timeadjust = ($fuso * 60 * 60);

if ($fator == "+"){
$ano = date("Y",time() + $timeadjust);
$dia = date("d",time() + $timeadjust);
$diasem = date("w",time() + $timeadjust);
$h = date("H",time() + $timeadjust);
$m = date("i",time());
$mes = date ("n",time() + $timeadjust);
}

if ($fator == "-"){
$ano = date("Y",time() - $timeadjust);
$dia = date("d",time() - $timeadjust);
$diasem = date("w",time() - $timeadjust);
$h = date("H",time() - $timeadjust);
$m = date("i",time());
$mes = date ("n",time() - $timeadjust);
}

#Fim do Script
#######################################################################################

//Imprime a data
$data = ''.$dia.' de '.$mesnome[$mes].' de '.$ano.'';
$data2 = ''.$dia.'/'.$mesn[$mes].'/'.$ano.'';
$hora = $h."h".$m;
?>
