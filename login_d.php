<?php 
include "./connect.php";

   $loginnome = $_POST['login-nome'];
   $loginsenha = $_POST['login-senha'];


if($loginnome && $loginsenha){
$sql = mysqli_query($link, "select * from admin WHERE nome = '$loginnome'");
while($dados = mysqli_fetch_array($sql)){
    $nomelogin = $dados['nome'];
    $senhalogin = $dados['senha'];
}
if($loginnome == $nomelogin  && $loginsenha == $senhalogin ){
   SESSION_START();
$_SESSION["login_user"] = $loginnome;
$_SESSION["senha_user"] = $loginsenha;
    header('location: home.php');
}else{
    header('location: index.php');
  
    
 } 
}else{
   header('location: index.php');
} 
/*
*/
?>