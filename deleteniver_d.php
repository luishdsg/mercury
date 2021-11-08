<?php 
SESSION_START();
include "connect.php";
include "verifi_d.php";
$id_postniver = $_GET["id_postniver"];
$del_post = "delete from postniver where id_postniver = '$id_postniver'";
$del = mysqli_query($link , $del_post);
if(!$del){
      header("location: home.php?p=error");
}else{
    header("location: home.php");
}
?>