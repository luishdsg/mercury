<?php 
SESSION_START();
include "./verifi_d.php";
include "./connect.php";
$nome_tab = $_POST['nome-tab'];
$tipo_tab = $_POST['tipo-list'];
date_default_timezone_set('America/Sao_Paulo');
$icon = date("H");
$today = date("j F, Y • g:i a");  

if ($icon >= 0 && $icon <= 6) {
    $tempo = "🌙";    
} else if ($icon >= 6 && $icon <= 12) {
   $tempo= "⛅";
} else if ($icon >= 12 && $icon <= 17) {
     $tempo = "🌤️";
} else {
  $tempo = "🌙";
} 


$hora_tab = ($today . $tempo);

// echo   $log_id."<br>".$nome_tab ."<br>".$tipo_tab."<br>". $hora_tab ;


if($nome_tab != "" && $tipo_tab != ""){
    $sql  = "insert into lista (nome,tipo,hora,id)
    VALUES('$nome_tab','$tipo_tab','$hora_tab','$log_id');";
    mysqli_query($link,$sql); 
// echo "ho poha!";
}else{
// echo "ho poha krl!";
header('location: home.php?p=error');

}
      

if(!$sql){
    header('location: home.php?p=error');
// echo "foi!";

}else{
    header('location: home.php');

// echo "ho poha krl!";

}
?>