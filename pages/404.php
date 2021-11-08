
<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    .back-404,
    .back-404:hover {
        color: rgba(255, 255, 255, 0.315);
        text-decoration: none;
    }
    
    .back-404 {
        color: white;
        background: rgb(38, 34, 75);
        padding: 1rem;
        transition: .2s;
        outline: none;
        transform: .2s;
        border-radius: 10px;
    }
    
    .back-404:hover {
        background: rgb(44, 39, 88);
    }

    
    .error {
        width: 100%;
        max-height: 50%;
        text-align-last: center;
    }
    
    img {
        max-width: 50%;
        height: auto;
    }
    
    h3 {
        text-align: center;
        padding: 3rem 1rem;
        font-size: 24px;
        color: white;
    }
    
    .links {
        text-align-last: center;
        width: 100%;
        position: absolute;
        padding: 1rem 0;
        bottom: 2rem;
    }
    
    @media (max-width:500px) {
        .error {
            margin-top: 15%;
        }
        img {
            max-width: 80%;
            max-height: 50rem;
        }
        h3 {
            text-align: center;
            padding: 3rem 1rem;
            font-size: 24px;
            color: white;
        }
        .links {
            text-align-last: center;
            width: 100%;
            position: absolute;
            padding: 1rem 0;
            bottom: 20px;
        }
    }
</style>

<body class="body-404">
    <div class="error">
        <img src="../src/svg/404.svg" />
        <h3>Ops, algo de errado deve ter ocorrido</h3>
    </div>

    <div class="links">
        <a class="back-404" href="../home.php">
            <img style="position: absolute; width: 24px; height: 24px;" src="https://img.icons8.com/fluent/48/000000/reply-arrow.png" />⠀⠀⠀voltar para a home</a>
    </div>