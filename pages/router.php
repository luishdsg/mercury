
<?php 
@$p = isset ($_GET['p'])? $_GET['p']: ""; 

if($p == 'list'){
    include "list.php";
}
else if($p == 'error'){
    include "404.php";
}else if($p == 'add'){
    include "add.php";
}else{
    include "timeline.php";
}
?>