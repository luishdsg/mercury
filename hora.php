<?php 

date_default_timezone_set('America/Sao_Paulo');
$icon = date("H");
$hora = date("d F, Y • $icon:m", getlastmod());

$today = date("F j, Y, g:i a");  
if ($icon >= 0 && $icon <= 6) {
    $tempo = "🌙";    
} else if ($icon >= 6 && $icon <= 12) {
   $tempo= "⛅";
} else if ($icon >= 12 && $icon <= 17) {
     $tempo = "🌤️";
} else {
  $tempo = "🌙";
}

$hora_tab = ($hora . $tempo);
echo $today."<br>". $hora_tab;