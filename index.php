<?php 
include "./connect.php";

SESSION_START();
if(isset ($_SESSION['login_user']) && isset ($_SESSION['senha_user'])){
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>𝗠𝗘𝗥𝗖𝗨𝗥𝗬</title>
    <link rel="shortcut icon" href="./src/svg/fav.ico" />
    <script src="https://code.jquery.com/jquery-2.1.0.min.js" integrity="sha256-8oQ1OnzE2X9v4gpRVRMb1DWHoPHJilbur1LP9ykQ9H0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <script>
        var loadpage = setInterval(function() {
            clearInterval(loadpage);
            document.getElementById("loadpage").style.display = "none";
            document.getElementById("forms").style.display = "block";
        }, 2300);
    </script>
    <div class="loadpage" id="loadpage" style="display: block;">
        <div class=" this w3-black">
            <br>
            <video width="320" height="240" autoplay muted>
              <source src="./src/svg/logos.mp4" type="video/mp4">Your browser does not support the video tag.
            </video>
            <br>
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        @import url("https://fonts.googleapis.com/css?family=Fira+Sans");
        html,
        body {
            background-image: url("./src/svg/back.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: fixed;
            width: 100%;
            height: 100%;
            font-family: "Fira Sans", Helvetica, Arial, sans-serif;
        }
        
        main {
            width: 100%;
            height: 100%;
            text-align: -webkit-center;
            margin-top: 4%;
        }
        .loadpage {
            position: fixed;
            width: 101%;
            height: 100%;
            background:#0d0e3d;
            top: 0;
            z-index: 1000;
        }
        
        .this {
            width: 100%;
            height: 100%;
            padding: 10% 0;
            text-align-last: center;
        }
        
        .logo-img {
            position: absolute;
            width: 100%;
            top: 3rem;
            text-align: --webkit-center;
        }
        
        .logo-img img {
            width: 60%;
            height: auto;
        }
        
        .form-structor {
            border-radius: 15px;
            height: 550px;
            border-top: 1px solid rgba(0, 162, 255, 0.432);
            border-left: 1px solid rgba(0, 162, 255, 0.432);
            border-right: 1px solid rgba(0, 162, 255, 0.432);
            width: 350px;
            position: relative;
            overflow: hidden;
        }
        
        .form-structor::after {
            content: "";
            opacity: 0.8;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        
        .form-structor .signup {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 80%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .signup.slide-up {
            top: 5%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .signup.slide-up .form-holder,
        .form-structor .signup.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
        }
        
        .form-structor .signup.slide-up .form-title {
            font-size: 1em;
            cursor: pointer;
        }
        
        .form-structor .signup.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .signup .form-title {
            color: #fff;
            font-size: 1.7em;
            text-align: center;
        }
        
        .form-structor .signup .form-title span {
            color: white;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .signup .form-holder {
            border-radius: 15px;
            background-color: #fff;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
        }
        
        .form-structor .signup .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            width: 100%;
            font-size: 12px;
        }
        
        .form-structor .signup .form-holder .input:last-child {
            border-bottom: 0;
        }
        
        .form-structor .signup .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }
        
        .form-structor .signup .submit-btn {
            background-color: rgba(0, 0, 0, 0.4);
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 0;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .signup .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .form-structor .login {
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
            background: #111049;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login::before {
            content: "";
            position: absolute;
            left: 50%;
            top: -20px;
            -webkit-transform: translate(-50%, 0);
            background: #111049;
            width: 200%;
            height: 250px;
            border-radius: 50%;
            z-index: 4;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login .center {
            position: absolute;
            top: calc(50% - 10%);
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 80%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login .center .form-title {
            color: white;
            font-size: 1.7em;
            text-align: center;
        }
        
        .form-structor .login .center .form-title span {
            color: white;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login .center .form-holder {
            border-radius: 15px;
            background: #111049;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
            animation-timing-function: ease;
            animation-name: example;
            animation-duration: .9s;
            animation-fill-mode: forwards;
        }
        
        .form-structor .login .center .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            width: 100%;
            font-size: 12px;
        }
        
        .form-holder i {
            position: absolute;
            right: 7%;
            bottom: 35%;
        }
        
        .form-structor .login .center .form-holder .input:last-child {
            border-bottom: 0;
        }
        
        .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }
        
        .form-structor .login .center .submit-btn {
            background-color: #6B92A4;
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login .center .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .form-structor .login.slide-up {
            top: 90%;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login.slide-up .center {
            top: 10%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login.slide-up .form-holder,
        .form-structor .login.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login.slide-up .form-title {
            font-size: 1em;
            margin: 0;
            padding: 0;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
        }
        
        .form-structor .login.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }
        
        .container {
                        max-width: 100%;
                        animation-timing-function: ease;
                        animation-name: go;
                        animation-duration: .6s;
                        animation-fill-mode: forwards;
                    }
                    
                    .voltar {
                        border-radius: 10px;
                        background: rgba(42, 19, 78, 0.534);
                        color: rgba(255, 255, 255, 0.37);
                        top: 1.3rem;
                        cursor: pointer;
                        position: absolute;
                        left: 0;
                        transition: .2s;
                        padding: 7px 10px;
                    }
                    
                    @keyframes go{
                        from {
                            opacity: 0;
                            margin-left: -50px;
                        }
                        to {
                            opacity: 1;
                            margin-left: 0px;
                        }
                    }
                    
                    .voltar:hover {
                        background: rgba(54, 25, 102, 0.651);
                    }
                    
                    .avatar-upload {
                        position: relative;
                        max-width: 205px;
                        margin: 50px auto;
                    }
                    
                    .imageUpload {
                        color: white;
                    }
                    
                    .imageUpload img {
                        width: 30px;
                        margin-top: 70px;
                        height: 30px;
                    }
                    
                    .avatar-upload .avatar-edit {
                        position: absolute;
                        right: 12px;
                        z-index: 1;
                        top: 10px;
                    }
                    
                    .avatar-upload .avatar-edit input {
                        display: none;
                    }
                    
                    .avatar-upload .avatar-edit input+label {
                        display: inline-block;
                        width: 192px;
                        height: 192px;
                        position: absolute;
                        top: -5px;
                        right: -6px;
                        border-radius: 100%;
                        background: rgba(0, 0, 0, 0.295);
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all 0.2s ease-in-out;
                    }
                    
                    .avatar-upload .avatar-edit input+label:hover {
                        background: rgba(0, 0, 0, 0.534);
                        border-color: #d6d6d6;
                    }
                    
                    .avatar-upload .avatar-preview {
                        width: 192px;
                        height: 192px;
                        position: relative;
                        border-radius: 100%;
                        border: 6px solid #F8F8F8;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
                    }
                    
                    .avatar-upload .avatar-preview>div {
                        width: 100%;
                        height: 100%;
                        border-radius: 100%;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                    }
        
        @media (max-width: 500px) {
            .form-structor {
                border-radius: 25px;
                margin-top: 15%;
                height: 80%;
                width: 90%;
                position: relative;
                overflow: hidden;
            }
            .form-structor .signup .form-title {
                color: #fff;
                font-size: 1em;
                text-align: center;
            }
            .form-holder i {
                position: absolute;
                right: 7%;
                bottom: 37%;
            }
            .form-structor .login .center .form-title {
                color: white;
                font-size: 1em;
                text-align: center;
            }
             .voltar {
                        border-radius: 10px;
                        background: #1b0e3d;
                        color: rgba(255, 255, 255, 0.37);
                    
                        cursor: pointer;
                        top: -2.3rem;position: absolute;
                         left: -15px;
                        transition: .2s;
                        padding: 7px 10px;
                    }
            main {
                width: 100%;
                height: 100%;
                text-align: -webkit-center;
                margin-top: 4%;
            }
        }
    </style>
    <main>
        <div style="display: none;" id="forms" class="form-structor">
            <div class="logo-img">
                <img src="./src/svg/mercury.png" />
            </div>
            <form action="signup_d.php" method="post" enctype="multipart/form-data" class="signup">
                <h2 class="form-title" id="signup"><span>ou</span>Criar conta</h2>
                <div class="form-holder" id="form-holder">
                    <input type="text" class="input" name="nome" placeholder="Nome" required />
                    <i onclick="eye()" class="bi bi-eye"></i>
                    <input type="password" class="input" id="pass" name="senha" placeholder="Password" required />
                </div> 
                <h6 id="nextstep" onclick="nextstep()" class="submit-btn">Escolher foto</h6>
                <div class="container" id="form-up" style="display: none;">
                    <span class="voltar" id="voltar" onclick="voltar()">
                    <img style="position: absolute; width: 22px; height: 22px;" src="https://img.icons8.com/fluent/48/000000/reply-arrow.png" />⠀⠀⠀voltar

                    </span>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' name="imageUpload" id="imageUpload" accept=".png, .jpg, .jpeg, .gif" />
                            <label class="imageUpload" for="imageUpload">
                                <img src="https://img.icons8.com/material-rounded/24/ffffff/image.png"/>
                                <br>Escolha uma foto
                            </label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(https://i.imgur.com/nsczkrA.png);">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">Criar conta</button>
                </div>
            </form>
            <form action="login_d.php" method="post" enctype="multipart/form-data" class="login slide-up">
                <div class="center">
                    <h2 class="form-title" id="login"><span>ou</span>Entrar</h2>
                    <div class="form-holder">
                        <input type="text" class="input" name="login-nome" placeholder="Nome" required />
                        <i onclick="eye()" class="bi bi-eye"></i>

                        <input type="password" class="input" id="pass2" name="login-senha" placeholder="Password" required />
                    </div>
                    <button type="submit" class="submit-btn">Entrar</button>
                </div>
            </form>
        </div>
    </main>

    <script>
                            function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                                $('#imagePreview').hide();
                                $('#imagePreview').fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    $("#imageUpload").change(function() {
                        readURL(this);
                    });


                    function nextstep() {
                        document.getElementById("form-holder").style.display = "none";
                        document.getElementById("nextstep").style.display = "none";
                        document.getElementById("signup").style.display = "none";
                        document.getElementById("form-up").style.display = "block";
                    }

                    function voltar() {
                        document.getElementById("signup").style.display = "block";
                        document.getElementById("form-holder").style.display = "block";
                        document.getElementById("nextstep").style.display = "block";
                        document.getElementById("form-up").style.display = "none";
                    }
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
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');

        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
        });
    </script>
</body>

</html> }); });
</script>
</body>

</html> }); });
</script>
</body>

</html> }); });
</script>
</body>

</html> }); });
</script>
</body>

</html>