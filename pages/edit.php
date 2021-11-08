<?php 
SESSION_START();
include "../verifi_d.php";
$id_edit = $_GET['id_post'];
include "../connect.php";
$sql = "select * from post WHERE id_post = '$id_edit'";

$result = mysqli_query($link, $sql);
while($updates = mysqli_fetch_array($result)){
    $nome_up = $updates['nome_list'];
    $numero_up = $updates['numero_list'];
    $tel_up = $updates['tel_list'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>𝗠𝗘𝗥𝗖𝗨𝗥𝗬 | Edit
        <?php echo $id_edit; ?>
    </title>
    <link rel="shortcut icon" href="../src/svg/fav.ico" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/2b7710cc6f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="../src/js.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
     ::-webkit-scrollbar {
        width: 0px;
        border-radius: 100rem;
    }
    /* Track */
    
     ::-webkit-scrollbar-track {}
    /* Handle */
    
     ::-webkit-scrollbar-thumb {
        width: 0px;
        border-radius: 100rem;
    }
    /* Handle on hover */
    
     ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    
    * {
        margin: 0;
        padding: 0;
    }
    
    ul li {
        list-style-type: none;
        margin-left: -29px;
    }
    
    a {
        text-decoration: none;
        font-weight: 300;
        font-size: 14px;
        color: rgba(197, 197, 255, 0.582);
    }
    
    a:hover {
        color: rgba(197, 197, 255, 0.582);
    }
    
    html {
        width: 100%;
        background: black;
        height: 100%;
    }
    
    body {
        color: white;
        font-family: 'Montserrat', sans-serif;
    }
    /* MY-STYLES */
    
    .pat {
        padding-top: 1rem;
    }
    
    .patt {
        padding-top: 2rem;
    }
    
    .pattt {
        padding-top: 5rem;
    }
    
    .pal {
        padding-left: 1rem;
    }
    
    .pall {
        padding-left: 2rem;
    }
    
    .palll {
        padding-left: 3rem;
    }
    
    .par {
        padding-right: 1rem;
    }
    
    .parr {
        padding-right: 2rem;
    }
    
    .parrr {
        padding-right: 5rem;
    }
    
    .pab {
        padding-bottom: 1rem;
    }
    
    .pabb {
        padding-bottom: 2rem;
    }
    
    .pabbb {
        padding-bottom: 5rem;
    }
    
    .pv {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    
    .pv-2 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    
    .pv-3 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    
    .ph {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .ph-2 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
    
    .ph-3 {
        padding-left: 3rem;
        padding-right: 3rem;
    }
    
    .mpv {
        padding-top: 3px;
        padding-bottom: 3px;
    }
    
    .mpal {
        padding-left: 10px;
    }
    
    .borderb {
        border-bottom: 1px solid rgba(255, 255, 255, 0.205);
    }
    
    .theme {
        background: linear-gradient(130deg, purple, orange);
    }
    
    .radiu {
        border-radius: 10rem;
    }
    
    .filter {
        filter: blur(10px);
    }
    
    .span {
        font-family: "Montserrat", cursive;
        font-size: 15px;
        font-weight: 300;
    }
    
    .main {
        width: 220px;
        position: fixed;
        left: 0px;
        display: block;
        top: 2%;
        border-radius: 10px;
        box-shadow: 0px 1px 8px 0px black;
        height: 96%;
    }
    
    #listoflist ul li i {
        font-size: 16px !important;
    }
    
    #listoflist ul li h6,
    #listoflist ul li i {
        font-weight: 300;
        font-size: 14px;
    }
    
    #listoflist ul li {
        cursor: pointer;
        border-radius: 10px;
        display: flex;
        margin: 5px 0 5px -25px;
        color: rgba(197, 197, 255, 0.582);
        border: 1px solid transparent;
        background: #7f00993a;
        transform: 0.2s;
        transition: 0.2s
    }
    
    #listoflist ul li:hover {
        cursor: pointer;
        border: 1px solid #7f0099;
        background: #3b0047;
        transition: .2s;
        transform: .2s;
    }
    
    .cont a {
        max-width: 90%;
        cursor: pointer;
        margin: 5px 0;
        border-radius: 10px;
        background: rgb(41, 43, 54);
    }
    
    #war-list {
        text-align: -webkit-center;
    }
    
    .rh {
        border: 0;
        width: 100%;
        border-top: 1px solid #eee;
        margin: 0;
    }
    
    .fz-12 {
        font-size: 12px;
    }
    
    .cont div h6,
    .cont div i {
        font-weight: 300;
        font-size: 14px;
        color: rgba(197, 197, 255, 0.582);
    }
    
    .cont a {
        max-width: 90%;
        margin: 5px 0;
        border-radius: 10px;
        background: rgb(41, 43, 54);
    }
    
    .liset:hover {
        background: #0dcaf02c;
        transition: .2s;
        transform: .2s;
    }
    
    .liset {
        padding: 7px 0 7px 17px;
        border: 1px solid #0dcaf0;
    }
    
    .liset span {
        font-size: 13px;
        font-weight: 300;
    }
    
    .liset2 {
        padding: 7px 0 7px 17px;
        background: rgba(255, 0, 0, 0.178);
        border: 1px solid rgba(255, 0, 0, 0.637);
    }
    
    .liset2 span {
        font-weight: 300;
    }
    
    .cont a:hover {
        background: rgb(54, 57, 73);
        transition: .2s;
        transform: .2s;
    }
    /* ID´S  */
    
    #main-inside2 {
        overflow: auto;
        height: 71%;
    }
    
    #ulset li {
        margin: 5px 0 5px -12px;
        color: rgba(197, 197, 255, 0.87);
        border-radius: 10px;
        max-width: 95%;
    }
    
    #main-inside3 {
        position: absolute;
        bottom: 15px;
    }
    
    #logo-text {
        font-size: 16px;
    }
    
    #lasttime span {
        font-size: 10px;
    }
    
    .img-prof-set {
        width: 30px;
        height: 30px;
        border-radius: 10rem;
        background-image: url("../admin/<?php echo $log_nome."/".$log_img ?>"), url("https://i.imgur.com/nsczkrA.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .hovlink {
        background: rgb(41, 43, 54);
    }
    
    .article {
        margin-left: 230px;
        width: 82%;
        max-width: 2000px;
    }
    
    .header-nav {
        border-radius: 10px;
        margin: 12px;
    }
    
    #label-search {
        position: absolute;
        left: 45px;
        top: 33px;
    }
    
    .search {
        border-radius: 10px;
        outline: none;
        padding-left: 40px !important;
        width: 100%;
        height: 40px;
        border: none;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: white;
        background: rgb(54, 57, 73);
    }
    
    .sla {
        width: fit-content;
        border-radius: 10px;
        transition: .2s;
        padding-top: 3px;
        transform: .2s;
        background: rgb(41, 43, 54);
    }
    
    .sla:hover {
        background: rgb(54, 57, 73);
    }
    
    .box-mobile {
        width: fit-content;
        height: fit-content;
        cursor: pointer;
        border-radius: 5px;
        padding: 2px 0px 1px 11px;
        display: none;
        margin-top: 3px;
    }
    
    .coll {
        width: 28.8888%;
    }
    
    .lloc {
        width: 70%;
    }
    
    .box-mobile:hover {
        color: rgb(83, 98, 168);
    }
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    /*============ DIVISOR DE AGUAS============*/
    
    .form .button,
    .form .message,
    .customSelect,
    .form .select,
    .form .textarea,
    .form .text-input,
    .form .option-input+label,
    .form .checkbox-input+label,
    .form .label {
        padding: 0.75em 1em;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        line-height: normal;
        border-radius: 0;
        border: none;
        background: none;
        display: block;
    }
    
    .text-input {
        border-radius: 10rem !important;
    }
    
    .form .label {
        color: white;
        padding-top: 0;
        padding-left: 3px;
        font-size: 1em;
        position: relative;
        z-index: 1;
    }
    
    .required .form .label:after,
    .form .required .label:after {
        content: " *";
        color: #E8474C;
        font-weight: normal;
        font-size: 0.75em;
        vertical-align: top;
    }
    
    .customSelect,
    .form .select,
    .form .textarea,
    .form .text-input,
    .form .option-input+label,
    .form .checkbox-input+label {
        font: inherit;
        line-height: normal;
        width: 100%;
        box-sizing: border-box;
        background: rgb(41, 43, 54);
        color: white;
        position: relative;
    }
    
    .form:not(.has-magic-focus) .customSelect.customSelectFocus,
    .form:not(.has-magic-focus) .customSelect:active,
    .form:not(.has-magic-focus) .select:active,
    .form:not(.has-magic-focus) .textarea:active,
    .form:not(.has-magic-focus) .text-input:active,
    .form:not(.has-magic-focus) .option-input+label:active,
    .form:not(.has-magic-focus) .checkbox-input+label:active,
    .form:not(.has-magic-focus) .customSelect:focus,
    .form:not(.has-magic-focus) .select:focus,
    .form:not(.has-magic-focus) .textarea:focus,
    .form:not(.has-magic-focus) .text-input:focus,
    .form:not(.has-magic-focus) .option-input+label:focus,
    .form:not(.has-magic-focus) .checkbox-input+label:focus {
        background: rgb(54, 57, 73);
    }
    
    .form .message {
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 1;
        font-size: 0.625em;
        color: white;
    }
    
    .form .option-input,
    .form .checkbox-input {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }
    
    .form .option-input+label,
    .form .checkbox-input+label {
        display: inline-block;
        width: auto;
        color: #4E4E4E;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
    }
    
    .form .option-input:focus+label,
    .form .checkbox-input:focus+label,
    .form .option-input:active+label,
    .form .checkbox-input:active+label {
        color: #4E4E4E;
    }
    
    .form .option-input:checked+label,
    .form .checkbox-input:checked+label {
        color: white;
    }
    
    .form .button {
        font: inherit;
        line-height: normal;
        cursor: pointer;
        background: #E8474C;
        color: white;
        font-weight: bold;
        width: auto;
        margin-left: auto;
        font-weight: bold;
        padding-left: 2em;
        padding-right: 2em;
    }
    
    .form .button:hover,
    .form .button:focus,
    .form .button:active {
        color: white;
        border-color: white;
    }
    
    .form .button:active {
        position: relative;
        top: 1px;
        left: 1px;
    }
    
    .form {
        max-width: 40em;
        max-height: 35rem;
        margin: 15px auto;
        padding-top: 10px;
        border-radius: 10px;
        box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.267);
        position: relative;
        display: flex;
        flex-flow: row wrap;
        justify-content: space-between;
        align-items: flex-end;
    }
    
    .form .field {
        width: 100%;
        margin: 0 0 1.5em 0;
    }
    
    @media screen and (min-width: 40em) {
        .form .field.half {
            width: calc(50% - 1px);
        }
    }
    
    .form .field.last {
        margin-left: auto;
    }
    
    .form .textarea {
        max-width: 100%;
    }
    
    .form .select {
        text-indent: 0.01px;
        text-overflow: "" !important;
    }
    
    .form .select::-ms-expand {
        display: none;
    }
    
    .form .checkboxes,
    .form .options {
        padding: 0;
        margin: 0;
        list-style-type: none;
        overflow: hidden;
    }
    
    .form .checkbox,
    .form .option {
        float: left;
        margin: 1px;
    }
    
    .customSelect {
        pointer-events: none;
    }
    
    .customSelect:after {
        content: "";
        pointer-events: none;
        width: 0.5em;
        height: 0.5em;
        border-style: solid;
        border-color: white;
        border-width: 0 3px 3px 0;
        position: absolute;
        top: 50%;
        margin-top: -0.625em;
        right: 1em;
        transform-origin: 0 0;
        transform: rotate(45deg);
    }
    
    .customSelect.customSelectFocus:after {
        border-color: white;
    }
    
    .magic-focus {
        position: absolute;
        z-index: 0;
        width: 0;
        pointer-events: none;
        background: rgba(255, 255, 255, 0.15);
        transition: top 0.2s, left 0.2s, width 0.2s;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        will-change: top, left, width;
        transform-origin: 0 0;
    }
    
    @keyframes dirop {
        from {
            margin-left: 0px;
        }
        to {
            margin-left: -240px;
        }
    }
    
    @media (max-width: 625px) {
        .form {
            max-width: 20em;
            max-height: 45rem;
        }
    }
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    /* ================== MIDIAS ===================*/
    
    @media (max-width: 1300px) {
        .article {
            margin-left: 230px;
            width: 78% !important;
            max-width: 2000px;
        }
        .main {
            display: block;
        }
    }
    
    .mob {
        display: none !important;
    }
    
    @media (max-width: 1000px) {
        .article {
            margin-left: 230px;
            width: 70% !important;
            max-width: 2000px;
        }
        .main {
            display: block;
        }
        .content-p {
            display: block !important;
        }
        .col-8,
        .col-4 {
            width: 100% !important;
        }
        .fast-list {
            background: rgb(41, 43, 54);
            box-shadow: 0px 1px 8px 0px black;
            border-radius: 10px;
            max-height: 500px;
        }
        .mob {
            display: none !important;
        }
        .content {
            max-height: 100rem;
        }
        #nome-adm {
            display: none !important;
        }
    }
    
    @media (max-width: 790px) {
        .article {
            margin-left: 0px;
            width: 100% !important;
        }
        .mob {
            display: none !important;
        }
        .box-mobile {
            display: block;
        }
        .main {
            width: 220px;
            position: fixed;
            display: none;
            z-index: 100;
            top: 0;
            border-radius: 0 10px 10px 0;
            box-shadow: 0px 1px 8px 0px black;
            height: 100%;
            animation-timing-function: ease;
            animation-name: dirop;
            animation-duration: .6s;
            animation-fill-mode: forwards;
        }
        .sla {
            width: fit-content;
            border-radius: 10px;
            transition: .2s;
            margin-top: 3px;
            transform: .2s;
            background: rgb(41, 43, 54);
        }
        #label-search {
            position: absolute;
            left: 90px;
            top: 37px;
        }
    }
    
    @media (max-width: 500px) {
        .todo-container {
            padding: 1em 2em;
        }
        .info-list {
            display: block !important;
        }
        #config-list {
            display: none;
        }
        .mod {
            display: flex !important;
        }
        .sla {
            margin-top: 3px;
        }
        .content-list {
            border-radius: 10px;
            max-height: 35rem;
            overflow: auto;
        }
        .elipse {
            white-space: nowrap;
            width: 140px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        #label-search {
            position: absolute;
            left: 90px;
            top: 35px;
        }
    }
    
    @media (max-height: 610px) {
        #main-inside2 {
            overflow: auto;
            height: 65%;
        }
    }
</style>


<body class="body" id="body">
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    <article class="article h-100 position-absolute ">
        <?php 
include "./connect.php";
$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);
?>
        <div id="main" class="main bg-dark">
            <div id="main-inside" class="w-100 pt-3 ">
                <div class="d-flex align-items-center pall">
                    <img id="opsetbar" src="../src/svg/fav.ico" style="width: 24px; height: 18px;" />
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
                    <a id="lista" class="d-flex pal align-items-center ">
                        <i class="bi bi-list-nested"></i>
                        <h6 class="p-2">Listas</h6>
                    </a>
                </div>
            </div>
            <div class="w-100 " id="main-inside3">
                <ul class="" id="ulset">
                    <li class="liset2" data-toggle="tooltip" data-placement="top" title="sair da conta">
                        <a href="../logout.php" class="d-flex align-items-center ">
                            <i class="bi bi-box-arrow-in-left"></i>
                            <span class="p-1">Sair</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <header class="header-nav ml-2 mr-2 d-flex p-2 bg-dark">
            <a href="../home.php" class="box-mobile bg-dark">
                <i class="bi bi-house fa-2x"></i>
            </a>
            <form method="post" action="" class="col align-self-center ph">
                <label for="search-table" id="label-search">
                    <i class="bi bi-search"></i>
                </label>
                <input type="search" class="search" placeholder="procurar... " id="search-table" />
            </form>
            <div class="col-2 ">
                <a class="d-flex sla cursor w-fit p-2" onclick="opedit()" data-toggle="tooltip" data-placement="bottom" title="perfil do ususario">
                    <div class="img-prof-set"></div>
                    <span id="nome-adm" class="d-inline-block text-truncate p-1" style="max-width: 100px;">⠀<?php echo $log_nome ?></span>
                </a>
            </div>
        </header>
        <div class="content w-100 mpal pab">
            <div style="margin:0 0 0 -10px !important;" class="row pt-1 content-p">
                <form action='../edit_d.php' method="post" class='form bg-dark'>
                    <h4>Editar item da lista</h4>
                    <input type="hidden" name="id" value="<?php echo $id_edit; ?>" />
                    <p class='field required'>
                        <label class='label required' for='name_list'>Nome completo</label>
                        <input class='text-input' maxlength="30" value="<?php echo $nome_up; ?>" id='nome_list' name='up_nome_list' required type='text'>
                    </p>
                    <p class='field required half'>
                        <label class='label' for='number_list'>N° pessoas</label>
                        <input class='text-input' id='' value="<?php echo $numero_up; ?>" name='up_numero_list' type='number'>
                    </p>
                    <p class='field half'>
                        <label class='label' for='phone'>Celular</label>
                        <input class='text-input' id='phone' value="<?php echo $tel_up; ?>" name='up_tel_list' onkeypress="$(this).mask('(00) 00000-00009')" type='tel'>
                    </p>
                    <div class='field'>
                        <label class='label'>Acompanhante´s</label>
                        <ul class='options'>
                            <li class='option'>
                                <input class='option-input' id='option-0' name='up_acomp_list' type='radio' value='Esposa'>
                                <label class='option-label' for='option-0'>Esposa</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='option-1' name='up_acomp_list' type='radio' value='Namorada'>
                                <label class='option-label' for='option-1'>Namorada</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='option-2' name='up_acomp_list' type='radio' value='Esposo'>
                                <label class='option-label' for='option-2'>Esposo</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='option-3' name='up_acomp_list' type='radio' value='Namorado'>
                                <label class='option-label' for='option-3'>Namorado</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='option-4' name='up_acomp_list' type='radio' value='Família'>
                                <label class='option-label' for='option-4'>Família</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='option-5' name='up_acomp_list' type='radio' value='Sem'>
                                <label class='option-label' for='option-5'>Sem</label>
                            </li>

                        </ul>
                    </div>
                    <div class='field'>
                        <label class='label'>Convite por: </label>
                        <ul class='options'>
                            <li class='option'>
                                <input class='option-input' id='noivo' name='up_convite_list' type='radio' value='Noivo'>
                                <label class='option-label' for='noivo'>Noivo</label>
                            </li>
                            <li class='option'>
                                <input class='option-input' id='noiva' name='up_convite_list' type='radio' value='Noiva'>
                                <label class='option-label' for='noiva'>Noiva</label>
                            </li>
                        </ul>
                    </div>
                    <p class='field d-flex'>
                        <a href="./home.php" class="button ">Cancelar</a>
                        <input class='button btn-outline-dark' type='submit' value='Salvar'>
                    </p>
                </form>
            </div>
        </div>
    </article>
    </div>
</body>

</html>