<script>
    function deletar() {
            document.getElementById("certainty").style.display = "block";
            var all = document.getElementById("all");
            all.classList.add("filter");
        }
</script>
<?php
include "./connect.php";
//LISTA-TOTAL
$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);

 
//POSTS-CASAMENTO
$sql_post = "select * from post WHERE id_list = '$id_list'"?? "";
$posts = mysqli_query($link, $sql_post);
//COUNT-ITENS-CASAMENTO 
$sql_count = mysqli_query($link, "SELECT count(nome_list) as total from post where id_list = '$id_list'");
$total = mysqli_fetch_assoc($sql_count);


//POSTS-ANIVERSARIO
$sql_postniver = "select * from postniver WHERE id_list = '$id_list'"?? "";
$postniver = mysqli_query($link, $sql_postniver);
//COUNT-ITENS-ANIVERSARIO
$sql_countniver = mysqli_query($link, "SELECT count(nome_list) as total_niver from postniver where id_list = '$id_list'");
$total_niver = mysqli_fetch_assoc($sql_countniver);


//POSTS-SOCIAL
$sql_postsocial = "select * from postsocial WHERE id_list = '$id_list'"?? "";
$postsocial = mysqli_query($link, $sql_postsocial);
//COUNT-ITENS-SOCIAL
$sql_countsocial = mysqli_query($link, "SELECT count(nome_list) as total_social from postsocial where id_list = '$id_list'");
$total_social = mysqli_fetch_assoc($sql_countsocial);




while($lists = mysqli_fetch_array($result)){
$id_list = $lists['id_list'];
    echo
    "
<div id='lista$id_list' onload='createL()' style='display:block;' class='content-list'>
        <div id='config-list' class='config-list justify-content-between ph align-items-center d-flex'>
            <div style=' align-self: baseline;' class='d-flex align-items-center'>
             <h5 class='name-list text-truncate' style='max-width: 100px;' id='name-list'>$lists[nome]</h5>
              <span class='pal fz-11'>$lists[hora] </span>
            </div>
           
            <div style='' class='d-flex align-items-center' >
                <div onclick='minimize$id_list()' class='pal minmize' data-toggle='tooltip' data-placement='bottom' title='minimizar lista'>
                    <i class='bi bi-dash-lg '></i>
                </div>
                <a onclick='deletar()' class='text-danger' data-toggle='tooltip' data-placement='bottom' title='excluir lista'>
                    <i style='padding: 5px 5px 5px 15px;' class='bi radiu bi-x fa-2x'></i>
                </a>
            </div>
        </div>
        <div class=' d-block ph pv sborderb'>
            <div class='d-flex info-list align-items-center'>
                <div class=' d-block align-items-center'>
                    <div id='lasttime' class='d-flex  align-items-center'>
                        <span class=''>Total: $total[total]</span>
                        <span class='type'>$lists[tipo]</span>
                        <a href='home.php?p=add' onclick='linkadd()' id='link-add' class='pal d-flex align-items-center'>
                        <i class='bi bi-patch-plus'></i>
                        <h6 class=''>Adicionar</h6>
                        </a>              
                    </div>
                </div>
           </div>
        </div>
    </div>
 <script>
       function minimize$id_list(){
        document.getElementById('convidados').style.display = 'none';
        document.getElementById('lista$lists[id_list]').style.display = 'none';
        document.getElementById('linklist$lists[id_list]').style.display = 'flex';
    }
    </script>
    ";
} 
?>

<div id="convidados">
<?php include "convidados.php"; ?>
</div>

