<?php 

include "./connect.php";
SESSION_START();
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$image = $_FILES['imageUpload']['name'];
$image_t = $_FILES['imageUpload']['type'];
$_SESSION["login_user"] = $nome;
$_SESSION["senha_user"] = $senha;
$_SESSION["img_user"] = $image;
if(isset($_SESSION['login_user']) 
&& isset($_SESSION['senha_user'])){
if($nome != "" && $senha != ""){
$cadastro = true; 
}else{
    echo "deu ruim!";
}
$pasta = $nome;
if(file_exists("admin/" . $pasta)){
    header('Location: index.php');
}else{
mkdir("admin/". $pasta,0777);
header("location: home.php");
}
}

if($cadastro){
$sql = "insert into admin (nome, senha, imgProfile)VALUES 
('$nome', '$senha', '$image');";
mysqli_query($link, $sql);

move_uploaded_file($_FILES['imageUpload']['tmp_name'], "admin/".$pasta."/".$image);


}
?>