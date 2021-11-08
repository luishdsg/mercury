<?php
 SESSION_START();
include "./verifi_d.php";
$id_list = $_POST['id_list'];
$nome_list = $_POST['nome_list'];
$acomp_list = $_POST['acomp_list'];
$numero_list = $_POST ['numero_list'];


if($nome_list && $numero_list || $acomp_list){
 $sql  = "insert into postniver 
 (nome_list ,acomp_list ,
 numero_list ,id_list)VALUES
 ('$nome_list','$acomp_list',
 '$numero_list','$id_list')";
mysqli_query($link,$sql);
header('location: home.php');
// echo $id_list . "<br>" . $nome_list ."<br>". $acomp_list."<br>". $numero_list."<br>". $tel_list."<br>";
}else{
header('location: home.php?p=add');
}
?>