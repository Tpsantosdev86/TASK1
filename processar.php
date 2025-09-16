<?php
require_once ('variaveis_padrao.php'); 

echo "<hr>";
date_default_timezone_set("America/Sao_Paulo"); //timerzone identifier
echo date("d/m/Y H:i:s"); //formato data e hora

$pais_origem = "Brasil";
echo "<hr>";
function Local ($pais_origem) {

   $pais_origem = "Argentina";

  echo "Pais de origem $pais_origem";
  
}

local($pais_origem);


$Os_padrao = "Fedora Linux";
echo "<hr>";
function sistem ($Os_padrao) {

   $Os_padrao = "Ubuntu";

  echo "Sistema Operacional $Os_padrao"; 
  
}
sistem ($Os_padrao);


echo "<br>";
$versao_do_sistema = 1.0;
if ($versao_do_sistema < 2.0){
    echo "O sistema esta desatualizado!";
} else {
     echo "O sistema esta atualizado";

}
?>

