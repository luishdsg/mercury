<?php
SESSION_START();
include "verifi_d.php";
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>𝗠𝗘𝗥𝗖𝗨𝗥𝗬 | Home</title>
        <link rel="shortcut icon" href="./src/svg/fav.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/2b7710cc6f.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script>
        $(window).load(function() {
     document.getElementById("loading").style.display = "none";
     document.getElementById("all").style.display = "block";
})
    </script>

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
        
        .bord {
            border: 1px solid #ffffff52;
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
        
        .fz-11 {
            font-size: 11px;
        }
        
        .span {
            font-family: "Montserrat", cursive;
            font-size: 15px;
            font-weight: 300;
        }
        
        .main {
            width: 220px;
            position: fixed;
            left: 9px;
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
        
        #listoflist ul li{
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
        
        
        #war-list{
            text-align: -webkit-center;
        }

        .rh{
            border: 0;
            width: 100%;
            border-top: 1px solid #eee;
            margin: 0;
        }
        
        .fz-12{
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
        
        .img-prof-set {
            width: 30px;
            height: 30px;
            border-radius: 10rem;
            background-image: url("./admin/<?php echo $log_nome."/".$log_img ?>"), url("https://i.imgur.com/nsczkrA.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .hovlink {
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
        /* ================== SEARCH-PAGE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        /* ================== TABLE ===================*/
        
        .content-list {
            box-shadow: 0px 1px 8px 0px black;
            border-radius: 10px;
            margin-bottom: 1rem;
            border: 5px solid transparent;
            border-image: linear-gradient(to bottom right, #b827fc 0%, #2c90fc 25%, rgb(41 43 54) 50%, #fec837 75%, #fd1892 100%);
            border-image-slice: 1;
            max-height: 40.4rem;
            overflow: auto;
        }
        
        .content {
            max-height: 40.4rem;
        }
        
        .list-list {
            overflow: auto;
        }
        
        .mini-list h6 {
            cursor: pointer;
            white-space: nowrap;
            padding: 10px;
            border-radius: 10rem;
            margin: 0 5px;
            background: rgb(41, 43, 54);
            border: 1px solid rgb(54, 57, 73);
            font-size: 13px;
            max-width: 150px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .mini-list h6:hover {
            background: rgba(41, 43, 54, 0.781);
        }
        /* demo styles */
        
        section {
            padding: 0px 20px;
            border-radius: 10px;
        }
        
        .name-list {
            background: none;
            border: none;
            font-weight: bold;
            font-size: large;
            outline: none;
            color: white;
        }
        
        .config-list {
            justify-content: flex-end;
        }
        
        .config-list div {
            cursor: pointer;
        }
        
        .cursor {
            cursor: pointer;
        }
        
        .type {
            margin: 3px 10px;
            border: 1px solid aqua;
            padding: 7px 10px;
            cursor: pointer;
            transition: .2s;
            border-radius: 10rem;
            color: lightcyan;
        }
        
        .type:hover {
            background: #00ffff2e;
        }
        
        .warning {
            padding-bottom: 80px;
            left: 5%;
            position: absolute;
        }
        
        #link-add {
            margin: 3px 0px;
            padding: 0px 14px;
            cursor: pointer;
            background: #fb0097bf;
            transition: .2s;
            border-radius: 10rem;
            color: lightcyan;
        }
        
        #link-add:hover {
            background: #fb0097;
        }
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
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        /* ================== KEY-FRAMES ===================*/
        
        @keyframes dirop {
            from {
                margin-left: -240px;
            }
            to {
                margin-left: -9px;
            }
        }
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        /* ================== FAST-LIST ===================*/
        
        .fast-list {
            background: rgb(41, 43, 54);
            box-shadow: 0px 1px 8px 0px rgba(0, 0, 0, 0.267);
            border-radius: 10px;
            max-height: 500px;
        }
        
        .fast-list-title {
            height: 6rem;
            background-image: url("https://us.123rf.com/450wm/panychev/panychev2004/panychev200400074/144497290-stone-texture-dark-blue-background-with-dark-edges-empty-backdrop-for-placing-design-elements.jpg?ver=6");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        button {
            outline: none;
            border: none;
            border-radius: 0px;
            cursor: pointer;
        }
        
        button svg {
            stroke: #0e1f69;
            pointer-events: none;
            align-self: center;
        }
        
        .wrapper {
            position: relative;
            height: 100%;
            min-height: 39.5rem;
            max-width: 30rem;
            max-height: 39.5rem;
            overflow: hidden;
            padding-bottom: 3em;
        }
        
        .text-container {
            width: 100%;
            margin: 0;
            padding: 2em 1em;
            padding-top: 4em;
        }
        
        .text-container h1 {
            text-align: center;
            font-family: var(--font-heading);
            font-weight: 400;
            font-size: 3em;
        }
        
        .center {
            width: 100%;
            max-height: 100%;
            display: flex;
            position: relative;
            padding: 0 10px;
            top: -2rem;
            justify-content: center;
            align-items: center;
            align-self: center;
            flex-flow: column wrap;
        }
        
        .todo-input-container {
            width: 100%;
            max-width: 475px;
            display: flex;
            justify-content: center;
            align-items: stretch;
        }
        
        .todo-input-container input,
        .todo-input-container button {
            border: none;
            outline: none;
        }
        
        .todo-input-container input {
            flex: 6;
            font-weight: 400 !important;
            font-family: "Poppins", sans-serif !important;
            color: #494949;
            padding: 1.25em;
            width: 95%;
            border-radius: 0px;
            font-size: 15px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            transition: 100ms ease;
            padding-left: 1.5em;
        }
        
        .todo-input-container button {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            flex: 1;
            background: #6c0586;
            transition: 225ms ease;
            cursor: pointer;
        }
        
        .todo-input-container button svg {
            stroke: #400250;
        }
        
        .todo-input-container button:hover {
            background: #410052;
        }
        
        .todo-input-container button:hover svg {
            stroke: #cc00ff;
        }
        
        .box-shadow {
            box-shadow: 0 10px 0 0 rgba(0, 0, 0, 0.25);
        }
        
        .todo-container {
            padding-top: 2em;
            padding-bottom: 1em;
            padding-left: 0;
            padding-right: 0;
            overflow: auto;
            margin: 0;
            max-height: 31rem;
            width: 100%;
            max-width: 475px;
        }
        
        .todo-container .todo {
            margin: 0 auto;
            margin-bottom: 1em;
            width: 100%;
            display: flex;
            justify-content: flex-end;
            flex-flow: row wrap;
            font-family: var(--font-todo);
            border: none;
            outline: none;
            background: rgb(54, 57, 73);
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            color: var(--color-red);
            -webkit-animation: comein 700ms ease;
            animation: comein 700ms ease;
            transition: 200ms ease;
        }
        
        .todo-container .todo.completed {
            width: 90%;
            transition: 200ms ease;
            text-decoration: line-through;
            opacity: 0.7;
        }
        
        .todo-container .todo li {
            flex: 10;
            padding: 1em;
            list-style-type: none;
            font-weight: 400 !important;
            font-family: "Poppins", sans-serif !important;
            color: #ffffff9d;
            align-self: center;
            cursor: default;
            margin: 0;
            line-height: 1.5;
            padding-left: 1.5em;
        }
        
        .todo-container .todo button {
            transition: 225ms ease;
            padding: 1em;
            flex: 1;
            margin: 0;
        }
        
        .todo-check {
            background: #94020200;
            border-left: 1.25px solid #0084ff85;
        }
        
        .todo-check:hover {
            background: #06b80628;
        }
        
        .todo-check svg {
            stroke: #ffffff;
        }
        
        .todo-check:hover svg {
            stroke: #00c251;
        }
        
        .todo-delete {
            background: #94020200;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        .todo-delete svg {
            stroke: #fff;
        }
        
        .todo-delete:hover {
            background: rgba(255, 0, 0, 0.144);
        }
        
        .todo-delete:hover svg {
            stroke: #df451e;
        }
        
        @-webkit-keyframes goAway {
            0% {
                transform: translateY(0vh) scale(1);
            }
            50% {
                transform: translateY(-30vh) scale(0.7);
                opacity: 0.7;
            }
            100% {
                transform: translateY(-30vh) scale(0.7) translateX(100vh);
                opacity: 0;
            }
        }
        
        @keyframes goAway {
            0% {
                transform: translateY(0vh) scale(1);
            }
            50% {
                transform: translateY(-30vh) scale(0.7);
                opacity: 0.7;
            }
            100% {
                transform: translateY(-30vh) scale(0.7) translateX(100vh);
                opacity: 0;
            }
        }
        
        @-webkit-keyframes comein {
            0% {
                transform: translateY(40vh) rotateY(180deg) scale(0);
                opacity: 0;
            }
            100% {
                opacity: 1;
                transform: translateY(0vh) rotateY(0deg) scale(1);
            }
        }
        
        @keyframes comein {
            0% {
                transform: translateY(40vh) rotateY(180deg) scale(0);
                opacity: 0;
            }
            100% {
                opacity: 1;
                transform: translateY(0vh) rotateY(0deg) scale(1);
            }
        }
    </style>
    <body class="body" id="body">
        <?php include "./pages/createtable.php";?>
        <?php include "./pages/loading.html";?>
        <?php include "./pages/warning.php";?>
        <div id="all">
            <?php include "./pages/nav.php"; ?>
            <article onload="onload()" class="article h-100 position-absolute ">
           
                <?php include "./pages/search.php"; ?>
                <div class="content w-100">
                    <div style="margin: 0 !important;" class="row content-p">
                        <?php include "./pages/router.php" ; ?>
                    </div>
                </div>
            </article>
            <?php include "./pages/profile.php"; ?>
        </div>
    </body>
    <script>
        //view-password
        function eye() {
            var pass = document.getElementById("pass");
            var pass2 = document.getElementById("pass2");

            if (pass.type === "password") {
                pass.type = "text";
            } else {
                pass.type = "password";
            }

            if (pass2.type === "password") {
                pass2.type = "text";
            } else {
                pass2.type = "password";
            }

        }

        
        //view-create-new-list
        function clcrelist() {
            document.getElementById("create-list").style.display = "none";
            document.getElementById("certainty").style.display = "none";
            var all = document.getElementById("all");
            all.classList.remove("filter");
        }

        function opcrelist() {
            document.getElementById("create-list").style.display = "block";
            var all = document.getElementById("all");
            all.classList.add("filter");

        }




        window.onload = function() {
            //Good-day-msg
            var txt = document.getElementById('good')
            var data = new Date()
            var hora = data.getHours()
            var min = data.getMinutes()
            if (hora >= 0 && hora <= 6) {
                txt.innerHTML = `🌙 Boa madrugada, <br> vamos criando uma lista então!`

            } else if (hora >= 6 && hora <= 12) {
                txt.innerHTML = `⛅ Bom dia, <br> vamos criando uma lista então!`

            } else if (hora >= 12 && hora <= 17) {
                txt.innerHTML = `🌤️ Boa tarde, <br> vamos criando uma lista então!`

            } else {
                txt.innerHTML = `🌙 Boa noite, <br> vamos criando uma lista então!`
            }
            var l = document.getElementById("new-list")
            var ill = document.getElementById("wellcome")
            var fastM = document.getElementById("fastmode")
            var c = document.getElementsByClassName("content-list")
            if (c[0].style.display = "block") {
                l.style.display = "none";
                ill.style.display = "none";
            } else {
                l.style.display = "block";
                ill.style.display = "block";
            }
        }

        //max & min
          
    function fastmode() {
        document.getElementById("wellcome").style.display = "none";
        document.getElementById("onfastmode").style.display = "none";
        document.getElementById("clfastmode").style.display = "flex";
        var modefast = document.getElementById("fastmode");
        modefast.style.display = "block";
        modefast.classList.remove("col-4");
        modefast.classList.add("col-12");
    }

    function clfastmode() {
        document.getElementById("onfastmode").style.display = "flex";
        document.getElementById("clfastmode").style.display = "none";
        var modefast = document.getElementById("fastmode");
        modefast.style.display = "none";
        modefast.classList.remove("col-12");
        modefast.classList.add("col-4");
    }
//cancel-delete
    function cancel() {
            document.getElementById("certainty").style.display = "none";
            var all = document.getElementById("all");
            all.classList.remove("filter");
        }
        
         
        //fast-list
        const app = {
            addButton: document.getElementById("todo-add-button"),
            todoContainer: document.getElementById("todo-container"),
            inputText: document.querySelector('[name="todo"]'),
            buttonTick: document.querySelector(".todo-check")
        };
        app.addButton.addEventListener("click", (e) => {
            e.preventDefault();
            let todo = document.createElement("div");
            todo.classList.add("todo");
            liMaker(app.inputText.value, todo);
            buttonCheckMaker(todo);
            buttonDeleteMaker(todo);
            if (app.inputText.value === "") {
                Swal.fire({
                    target: "body",
                    titleText: "you have to type something",
                    text: "It's look like you hadn't typed anything",
                    icon: "warning",
                    confirmButtonText: "Okay!"
                });
            } else {
                app.todoContainer.appendChild(todo);
            }
            app.inputText.value = "";
        });
        //eventlistener on enter
        app.inputText.addEventListener("keyup", (e) => {
            e.preventDefault();
            let todo = document.createElement("div");
            todo.classList.add("todo");
            liMaker(app.inputText.value, todo);
            buttonCheckMaker(todo);
            buttonDeleteMaker(todo);
            if (app.inputText.value === "" && event.keyCode == 13) {
                Swal.fire({
                    target: "body",
                    titleText: "you have to type something",
                    text: "It's look like you hadn't typed anything",
                    icon: "warning",
                    confirmButtonText: "Okay!"
                });
            } else if (event.keyCode == 13) {
                app.todoContainer.appendChild(todo);
                app.inputText.value = "";
            }
        });
        app.todoContainer.addEventListener("click", (e) => {
            let target = e.target;
            if (target.classList.contains("todo-delete")) {
                let items = target.parentElement;
                items.style.animation = "goAway 500ms ease";
                items.addEventListener("animationend", () => {
                    items.remove();
                });
            }
            if (target.classList.contains("todo-check")) {
                let item = target.parentElement;
                item.classList.toggle("completed");
            }
        });
        function liMaker(text, e) {
            //create li
            let li = document.createElement("li");
            li.innerText = `${text}`;
            e.appendChild(li);
        }
        function buttonCheckMaker(e) {
            //create button-check
            let buttonCheck = document.createElement("button");
            buttonCheck.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"\
            stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"\
            class="feather feather-check-circle">\
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>\
            <polyline points="22 4 12 14.01 9 11.01"></polyline></svg>';
            buttonCheck.classList.add("todo-check");
            e.appendChild(buttonCheck);
        }
        function buttonDeleteMaker(e) {
            //create button-delete
            buttonDelete = document.createElement("button");
            buttonDelete.innerHTML =
                '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"\
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"\
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">\
            <circle cx="12" cy="12" r="10"></circle>\
            <line x1="15" y1="9" x2="9" y2="15"></line>\
            <line x1="9" y1="9" x2="15" y2="15"></line></svg>';
            buttonDelete.classList.add("todo-delete");
            e.appendChild(buttonDelete);
        }
        //draggable-none-to-svg-images
        let img = document.querySelectorAll("svg");
        img.forEach((e) => {
            e.setAttribute("draggable", "false");
        });

        //create-list
        $(document).ready(function() {
        // Default dropdown action to show/hide dropdown content
        $('.js-dropp-action').click(function(e) {
            e.preventDefault();
            $(this).toggleClass('js-open');
            $(this).parent().next('.dropp-body').toggleClass('js-open');
        });

        // Using as fake input select dropdown
        $('label').click(function() {
            $(this).addClass('js-open').siblings().removeClass('js-open');
            $('.dropp-body,.js-dropp-action').removeClass('js-open');
        });
        // get the value of checked input radio and display as dropp title
        $('input[name="dropp"]').change(function() {
            var value = $("input[name='dropp']:checked").val();
            $('.js-value').text(value);
        });
    });
        //tool-tipos
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
</html>