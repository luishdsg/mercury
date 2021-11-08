<?php 
SESSION_START();
include "./verifi_d.php";
include "./connect.php";
$alter_senha = $_POST['alter-senha'];
$alter_new_senha = $_POST['alter-new-senha'];
$alter_img = $_FILES['alter-img']['name'];

   //se nova senha for diferente de nula, salve nova senha e redirecione para home
    if($alter_new_senha != ""){
        $sql = mysqli_query($link, 
        "UPDATE admin SET senha = '$alter_new_senha' WHERE id = '$log_id'");
        header('location: home.php');
    }
    //se senha for nula, tente salvar a imagem e redirecione para home
    else if ($alter_img != ""){
        $sql = mysqli_query($link, 
        "UPDATE admin SET imgProfile = '$alter_img' WHERE id = '$log_id'");
        move_uploaded_file($_FILES['alter-img']['tmp_name'], "admin/".$log_nome."/".$alter_img);
        header('location: home.php');
    }
    //se senha e imagem for nulo...redirecione ERROR 404!
    else{
          header('location: home.php?p=error');
    }

  

      




?>