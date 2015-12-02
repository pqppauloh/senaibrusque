<?
//*************************************************************************************//
// Data Inteligente1.0
// Esse script, mostra a data e a hora em formato brasileiro,
// em qualquer parte do mundo.
// Por exemplo, se seu site está hospedado em um servidor onde a hora é diferente da sua,
// Você pode ajustar para mostrar o seu horário, sem diferenças no fuso!
//
//
// Escrito por Spetson Serikava, http://trd-clan.fragism.com
//**************************************************************************************//

$fuso = 2; //diferença entre você e o servidor onde está sua página
$fator = "-"; // coloque +, se seu horário está na frente do servidor, ou coloque - se seu
//horário estiver atrás do servidor.

#pronto, daqui para baixo não tem mais o que configurar.

$diasemana[0] = "Domingo";
$diasemana[1] = "Segunda-feira";
$diasemana[2] = "Terça-feira";
$diasemana[3] = "Quarta-feira";
$diasemana[4] = "Quinta-feira";
$diasemana[5] = "Sexta-feira";
$diasemana[6] = "Sábado";

$mesnome[1] = "janeiro";
$mesnome[2] = "fevereiro";
$mesnome[3] = "março";
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
