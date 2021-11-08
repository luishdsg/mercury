<?php 
 include "./connect.php";

SESSION_START();
include "./verifi_d.php";
$id_post = $_POST['id'];
$up_nome = $_POST['up_nome_list'];
$up_numero = $_POST['up_numero_list'];
$up_tel = $_POST['up_tel_list'];


if($up_nome != "" || $up_numero != "" || $up_tel != ""){
       $sql = mysqli_query($link, 
       "UPDATE postsocial SET nome_list = '$up_nome' WHERE id_postsocial = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE postsocial SET numero_list = '$up_numero' WHERE id_postsocial = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE postsocial SET tel_list = '$up_tel' WHERE id_postsocial = '$id_post'");
       
        header('location: home.php');
}else{
    header('location: home.php?p=admin');
}
?>