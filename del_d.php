<?php
SESSION_START();
include "connect.php";
include "verifi_d.php";
//LISTA-COMP-ADD-ACESSOR
$id_list = $_GET["id_list"];
$del_list = "delete from lista where id_list = '$id_list'";
$del = mysqli_query($link , $del_list);


if(!$del){
      header("location: home.php?p=error");
}else{
    header("location: home.php");
}

?>