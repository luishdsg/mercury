<?php 
include "./verifi_d.php";

//LISTA
$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);
$lists = mysqli_fetch_array($result);
$id_list = $lists['id_list'];
$tipo =  $lists['tipo'];

if($tipo == "Aniversario"){
   include "add_niver.php";
}else if($tipo == "Casamento"){
   include "add_cas.php";
}else{
   include "add_social.php";

}
?>


