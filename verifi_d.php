<?php 
include "connect.php";

$log_nome = isset($_SESSION["login_user"])?$_SESSION["login_user"]:"";
$log_senha = isset($_SESSION["senha_user"])?$_SESSION["senha_user"]:"";



if($log_nome != ""  &&  $log_senha != ""){
  
   $dados = mysqli_query($link, "select * from admin WHERE nome = '$log_nome'");
   while ($data_db = mysqli_fetch_array($dados)){
       $log_nome = $data_db['nome'];
       $log_id = $data_db['id'];
       $log_senha = $data_db['senha'];
       $log_img = $data_db['imgProfile'];
   }

}else{
    header('location:index.php');
}

?>