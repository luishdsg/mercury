<?php 
SESSION_START();
include "connect.php";
include "verifi_d.php";
$id_post = $_GET["id_post"];
$del_post = "delete from post where id_post = '$id_post'";
$del = mysqli_query($link , $del_post);
if(!$del){
      header("location: home.php?p=error");
}else{
    header("location: home.php");
}
?>