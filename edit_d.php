<?php 
 include "./connect.php";

SESSION_START();
include "./verifi_d.php";
$id_post = $_POST['id'];
$up_nome = $_POST['up_nome_list'];
$up_acomp = $_POST['up_acomp_list'];
$up_numero = $_POST['up_numero_list'];
$up_tel = $_POST['up_tel_list'];
$up_convite = $_POST['up_convite_list'];


if($up_nome != "" || $up_numero != "" || $up_tel != "" || $up_acomp != "" || $up_convite != ""){
       $sql = mysqli_query($link, 
       "UPDATE post SET nome_list = '$up_nome' WHERE id_post = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE post SET acomp_list = '$up_acomp' WHERE id_post = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE post SET numero_list = '$up_numero' WHERE id_post = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE post SET tel_list = '$up_tel' WHERE id_post = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE post SET convite_list = '$up_convite' WHERE id_post = '$id_post'");
        header('location: home.php');
}else{
    header('location: home.php?p=admin');
}
?>