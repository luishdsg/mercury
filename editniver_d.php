<?php 
 include "./connect.php";

SESSION_START();
include "./verifi_d.php";
$id_post = $_POST['id'];
$up_nome = $_POST['up_nome_list'];
$up_acomp = $_POST['up_acomp_list'];
$up_numero = $_POST['up_numero_list'];


if($up_nome != "" || $up_numero != "" || $up_acomp != ""){
       $sql = mysqli_query($link, 
       "UPDATE postniver SET nome_list = '$up_nome' WHERE id_postniver = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE postniver SET acomp_list = '$up_acomp' WHERE id_postniver = '$id_post'");
        $sql = mysqli_query($link, 
        "UPDATE postniver SET numero_list = '$up_numero' WHERE id_postniver = '$id_post'");
        header('location: home.php');
}else{
    header('location: home.php?p=admin');
}
?>