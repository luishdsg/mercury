<?php 
include "./connect.php";
$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);
?>
<div id="main" class="main bg-dark">

<div id="main-inside" class="w-100 pt-3 ">
    <div class="d-flex align-items-center pall">
        <img id="opsetbar" src="./src/svg/fav.ico" style="width: 24px; height: 18px;"/>
        <i id="clsetbar" onclick="clsetbar()" style="display: none; cursor:pointer; color: red;" class="bi bi-x-circle fa-2x"></i>
        <h6 id="logo-text" class="p-2"> | 𝗠𝗘𝗥𝗖𝗨𝗥𝗬 - List</h6>
    </div>
</div>
<div id="main-inside2" class="w-100  ">

    <div class="cont pal ">
        <a href="home.php" id="link-home" class="d-flex pal align-items-center ">
            <i class="bi bi-house"></i>
            <h6 class="p-2">Home</h6>
        </a>

        <a  onclick="opcrelist()"  id="new-list" style="display: flex;" class="pal align-items-center ">
        <i class="bi bi-folder-plus"></i>
            <h6 class="p-2">Criar lista</h6>
        </a> 
        <a id="lista" class="d-flex pal align-items-center ">
            <i class="bi bi-list-nested"></i>
            <h6 class="p-2">Listas</h6>
        </a>

        <div class="w-100" id="listoflist">
            <ul style="margin:0 !important;" class="w-100">
            <?php while($lists = mysqli_fetch_array($result)){
                $id_list = $lists['id_list'];
                 echo "<li onclick='maxmize$id_list()' style='display:none;' id='linklist$lists[id_list]' class='pal linklist align-items-center w-100'>
                    <i class='bi bi-folder'></i>
                    <h6 class='p-2 text-truncate' style=max-width: 100px;'>$lists[nome]</h6>
                </li>
               <script>
               function maxmize$id_list(){
                   document.getElementById('convidados').style.display = 'block';
                document.getElementById('lista$lists[id_list]').style.display = 'block';
                document.getElementById('linklist$lists[id_list]').style.display = 'none';
            }
               </script>
               ";
            }
            ?>
               
               
            </ul>
    </div>
      
    </div>
</div>


<div class="w-100 " id="main-inside3">


    <ul class="" id="ulset">
    <li class="liset" data-toggle="tooltip" data-placement="top" title="modo lista rápida">
        <a href="#" style="display: flex;" onclick="fastmode()" id="onfastmode" class="align-items-center "> 
        <i class="bi text-info bi-lightning-charge-fill"></i>
            <span class="p-1 text-info">Modo Rápido</span>
        </a>
         <a href="#" style="display: none;" id="clfastmode" onclick="clfastmode()" class="align-items-center "> 
        <i class="bi text-info bi-lightning-charge-fill"></i>
            <span class="p-1 text-info">Sair do Modo</span>
        </a>
        </li> 
        <li class="liset2"  data-toggle="tooltip" data-placement="top" title="sair da conta">
        <a href="../logout.php" class="d-flex align-items-center "> 
            <i class="bi bi-box-arrow-in-left"></i>
            <span class="p-1">Sair</span>
        </a>
        
        </li>
    </ul>
</div>
</div>