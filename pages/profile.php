 <style>
            @import url(https://fonts.googleapis.com/icon?family=Material+Icons);
            @import url("https://fonts.googleapis.com/css?family=Raleway");
            .wrap {
                text-align: -webkit-center;
            }
            
            .box {
                display: block;
                max-width: 220px;
                height: 290px;
                margin: 10px 0;
                background: transparent;
                border-radius: 5px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                overflow: hidden;
            }
            
            .upload-options {
                position: relative;
                height: 50px;
                background: linear-gradient(45deg, rgb(255, 0, 98), #700070);
                cursor: pointer;
                overflow: hidden;
                text-align: center;
                transition: background-color ease-in-out 150ms;
            }
            
            .upload-options:hover {
                background-color: #7fb1b3;
            }
            
            .upload-options input {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }
            
            .upload-options label {
                display: flex;
                align-items: center;
                width: 100%;
                height: 100%;
                font-weight: 400;
                text-overflow: ellipsis;
                border-bottom: 2px solid pink;
                border-left: 2px solid pink;
                border-right: 2px solid pink;
                white-space: nowrap;
                cursor: pointer;
                overflow: hidden;
            }
            
            .upload-options label::after {
                content: "add";
                font-family: "Material Icons";
                position: absolute;
                font-size: 2.5rem;
                color: #e6e6e6;
                top: calc(50% - 2rem);
                left: calc(50% - 1.25rem);
                z-index: 0;
            }
            
            .upload-options label span {
                display: inline-block;
                width: 50%;
                height: 100%;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
                vertical-align: middle;
                text-align: center;
            }
            
            .upload-options label span:hover i.material-icons {
                color: lightgray;
            }
            
            .js--image-preview {
                height: 16rem;
                width: 100%;
                position: relative;
                border-top: 2px solid pink;
                border-left: 2px solid pink;
                border-right: 2px solid pink;
                overflow: hidden;
                background-image: url("../admin/<?php echo $log_nome ."/". $log_img ?>");
              
                transition: .4s;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: 220px;
            }
            
            .js--image-preview:hover {
                background-color: rgba(255, 255, 255, 0.089);
            }
            
            .js--image-preview::after {
                content: "photo_size_select_actual";
                font-family: "Material Icons";
                position: relative;
                font-size: 4.5em;
                color: #e6e6e6;
                top: calc(50% - 3rem);
                left: calc(50% - 7.1rem);
                z-index: 0;
            }
            
            .js--image-preview.js--no-default::after {
                display: none;
            }
            
            .js--image-preview:nth-child(2) {
                background-image: url("http://bastianandre.at/giphy.gif");
            }
            
            i.material-icons {
                transition: color 100ms ease-in-out;
                font-size: 2.25em;
                line-height: 55px;
                color: white;
                display: block;
            }
            
            .drop {
                display: block;
                position: absolute;
                background: rgba(95, 158, 160, 0.2);
                border-radius: 100%;
                transform: scale(0);
            }
            
            .animate {
                -webkit-animation: ripple 0.4s linear;
                animation: ripple 0.4s linear;
            }
            
            @-webkit-keyframes ripple {
                100% {
                    opacity: 0;
                    transform: scale(2.5);
                }
            }
            
            @keyframes ripple {
                100% {
                    opacity: 0;
                    transform: scale(2.5);
                }
            }
            
            .profile {
                width: 320px;
                position: fixed;
                z-index: 10;
                right: 0;
                overflow: auto;
                display: none;
                top: 0;
                box-shadow: 0px 1px 8px 0px black;
                height: 100%;
                animation-timing-function: ease;
                animation-name: esqop;
                animation-duration: .6s;
                animation-fill-mode: forwards;
            }
            
            @keyframes esqop {
                from {
                    margin-right: -100%;
                }
                to {
                    margin-right: 0;
                }
            }
            
            .pf-header i:nth-child(1) {
                border-radius: 12rem;
                cursor: pointer;
                font-size: 15px;
                padding: 8px 10px;
                transition: .2s;
            }
            
            .pf-header i:nth-child(1):hover {
                color: aqua;
                background: rgba(0, 119, 255, 0.13);
            }
            
            .pf-header i:nth-child(2) {
                border-radius: 12rem;
                cursor: pointer;
                padding: 2px 5px;
                transition: .2s;
            }
            
            .pf-header i:nth-child(2):hover {
                color: red;
                background: rgba(255, 0, 0, 0.144);
            }
            
            .pf-title {
                text-align: -webkit-center;
            }
            
            .pf-title img {
                width: 15%;
                height: auto;
            }
            
            .pf-info {
                width: 100%;
            }
            
            .col input {
                width: 100%;
                padding: 10px 15px;
                background: rgb(54, 54, 80);
                border: none;
                border-radius: 20px;
                outline: none;
                color: rgba(255, 255, 255, 0.452);
            }
            input[name=alter-senha] {
    pointer-events: none;
   }

            .bi-eye{
                position: absolute;
            right: 15%;
            padding-top: 10%;
            }
            
            .col button {
                width: 100%;
                border-radius: 10rem;
                color: white;
                background: rgba(2, 34, 75, 0.459);
                border: 0;
                transition: .2s;
                font-weight: bold;
                font-size: 15px;
                outline: none;
                border: 1px solid rgba(0, 106, 226, 0.432);
                padding: 10px 0;
                margin: 10px 0;
            }
            
            .col button:hover {
                background: rgb(3, 50, 112);
            }


            
            @media (max-width: 500px) {
                .profile {
                    width: 100%;
                    position: fixed;
                    z-index: 10;
                    right: 0;
                    display: none;
                    top: 0;
                    box-shadow: 0px 1px 8px 0px black;
                    height: 100%;
                    animation-timing-function: ease;
                    animation-name: esqop;
                    animation-duration: .6s;
                    animation-fill-mode: forwards;
                }
                #closeeditmob {
                    display: block !important;
                }
                #closeedit {
                    display: none !important;
                }
                .bi-eye{
                position: absolute;
            right: 10%;
            padding-top: 6.5%;
            }
            }
            @media (max-width: 425px) {
                .bi-eye{
                position: absolute;
            right: 12%;
            padding-top: 7.5%;
            }
            }
            @media (max-width: 340px) {
                .bi-eye{
                position: absolute;
            right: 14%;
            padding-top: 9.5%;
            }
            }
            @media (max-width: 260px) {
                .bi-eye{
                position: absolute;
            right: 16%;
            padding-top: 12.3%;
            }
            }

        </style>
<div id="profile" class="profile bg-dark">
    <header class="pf-header p-3">
        <i style="display: none;" id="closeeditmob" onclick="cledit()" class="bi bi-chevron-left">⠀voltar a home</i>
        <i id="closeedit" onclick="cledit()" class="bi bi-x fa-2x"></i>
    </header>
    <div class="pf-title">
        <img class="pv" src="../src/svg/fav.ico" />
         <h5 class="h5"><?php echo $log_nome ?></h5>
         <br>
        <h5 class="span">Editar perfil</h5>
        <span class="text-muted h6 ph">Adicione, remova ou edite imagens e informações suas</span>
    </div>
    <form action="../profile_d.php" enctype="multipart/form-data" method="POST" class="pf-form">
       <input type="hidden" value="<?php echo $log_id?>"/>
        <div class="wrap">
            <div class="box">
                <div class="js--image-preview"></div>
                <div class="upload-options">
                    <label>
                        <input type="file" value="" name="alter-img" class="image-upload" accept=".png, .jpg, .jpeg, .svg, .gif, .ico" />
                      
                    </label>
                </div>
            </div>
        </div>

        <div class="pf-info ph-2">
            <div class="row d-block">
                <div class="col pat">
                    <label class="">Senha antiga</label>
                    <i onclick="eyes()" class="bi bi-eye"></i>
                    <input type="password" value="<?php echo $log_senha ?>" id="alter-pass" name="alter-senha" />
                </div>
                <div class="col pat">
                    <label class="">Mudar senha</label>
                    <i onclick="eyes()" class="bi bi-eye"></i>
                    <input type="password" placeholder="nova senha" id="alter-new-pass" name="alter-new-senha" />
                </div>
                <div class="col pv-3">
                    <button type="submit" id="pf-submit">Salvar</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    //edit-profile-DOM
    function cledit() {
        document.getElementById("profile").style.display = "none";
    }

    function opedit() {
        document.getElementById("profile").style.display = "block";
    }
    //view-pass-edit-profile
    function eyes() {

var Apass = document.getElementById("alter-pass");
var Apass2 = document.getElementById("alter-new-pass");

if (Apass.type === "password") {
    Apass.type = "text";
} else {
    Apass.type = "password";
}

if (Apass2.type === "password") {
    Apass2.type = "text";
} else {
    Apass2.type = "password";
}
    }


    function initImageUpload(box) {
        let uploadField = box.querySelector('.image-upload');

        uploadField.addEventListener('change', getFile);

        function getFile(e) {
            let file = e.currentTarget.files[0];
            checkType(file);
        }

        function previewImage(file) {
            let thumb = box.querySelector('.js--image-preview'),
                reader = new FileReader();

            reader.onload = function() {
                thumb.style.backgroundImage = 'url(' + reader.result + ')';
            }
            reader.readAsDataURL(file);
            thumb.className += ' js--no-default';
        }

        function checkType(file) {
            let imageType = /image.*/;
            previewImage(file);
        }
    }

    // initialize box-scope
    var boxes = document.querySelectorAll('.box');

    for (let i = 0; i < boxes.length; i++) {
        let box = boxes[i];
        initDropEffect(box);
        initImageUpload(box);
    }



    /// drop-effect
    function initDropEffect(box) {
        let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

        // get clickable area for drop effect
        area = box.querySelector('.js--image-preview');
        area.addEventListener('click', fireRipple);

        function fireRipple(e) {
            area = e.currentTarget
                // create drop
            if (!drop) {
                drop = document.createElement('span');
                drop.className = 'drop';
                this.appendChild(drop);
            }
            // reset animate class
            drop.className = 'drop';

            // calculate dimensions of area (longest side)
            areaWidth = getComputedStyle(this, null).getPropertyValue("width");
            areaHeight = getComputedStyle(this, null).getPropertyValue("height");
            maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

            // set drop dimensions to fill area
            drop.style.width = maxDistance + 'px';
            drop.style.height = maxDistance + 'px';

            // calculate dimensions of drop
            dropWidth = getComputedStyle(this, null).getPropertyValue("width");
            dropHeight = getComputedStyle(this, null).getPropertyValue("height");

            // calculate relative coordinates of click
            // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
            x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
            y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

            // position drop and animate
            drop.style.top = y + 'px';
            drop.style.left = x + 'px';
            drop.className += ' animate';
            e.stopPropagation();

        }
    }
</script>