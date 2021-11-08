<?php
 SESSION_START();
include "./verifi_d.php";
$id_list = $_POST['id_list'];
$nome_list = $_POST['nome_list'];
$numero_list = $_POST ['numero_list'];
$tel_list = $_POST ['tel_list'];


if($nome_list || $numero_list 
|| $tel_list){
 $sql  = "insert into postsocial 
 (nome_list, numero_list, tel_list, id_list)VALUES
 ('$nome_list','$numero_list','$tel_list','$id_list')";
mysqli_query($link,$sql);
header('location: home.php');
// echo $id_list . "<br>" . $nome_list ."<br>". $acomp_list."<br>". $numero_list."<br>". $tel_list."<br>". $convite_list ;
}else{
header('location: home.php?p=add');
}
?>