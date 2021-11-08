<?php 
SESSION_START();
include "connect.php";
include "verifi_d.php";
$id_postsocial = $_GET["id_postsocial"];
$del_post = "delete from postsocial where id_postsocial = '$id_postsocial'";
$del = mysqli_query($link , $del_post);
if(!$del){
      header("location: home.php?p=error");
}else{
    header("location: home.php");
}
?>