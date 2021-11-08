<div class="col-12 pat thewell">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        #well-img {
            max-width: 50%;
            height: auto;
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
            max-height: 100%;
            text-align-last: center;
        }
        
        .links {
            text-align-last: center;
            width: 100%;
            position: absolute;
            padding: 1rem 0;
            bottom: 2rem;
        }
        
        h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            padding: 0rem 1rem;
            font-size: 24px;
            color: rgba(255, 255, 255, 0.685);
        }
        
        @media (max-width:500px) {
            .error {
                margin-top: 15%;
            }
            #well-img {
                max-width: 80%;
                max-height: 50rem;
            }
            h3 {
                font-size: 15px;
                padding: 1rem;
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.685);
            }
        }
        
        .config-list div .minmize i:nth-child(1):hover {
            background: #0099ff15;
        }
        
        .minmize:nth-child(2):hover {
            background: #ff000015;
        }
        
        .minmize button {
            background: none;
            border-radius: 10rem;
            color: red;
            border: 1px solid red;
            padding: 0 1rem;
            transition: .2s;
            transform: .2s;
        }
        
        .minmize button:hover {
            background: rgba(255, 0, 0, 0.178);
            transition: .2s;
            transform: .2s;
        }
        
        .list-group li {
            margin-left: 0px !important;
        }
        
        .opt-list-mob a {
            border-radius: 10rem;
            font-size: 15px;
            background: none;
            border: none;
            margin: 2px;
            outline: none;
        }
        
        .opt-list-mob a:nth-child(1) {
            color: orange;
            padding: 5px 2px 5px 7px;
        }
        
        .opt-list-mob a:nth-child(2) {
            padding: 5px 7px 5px 7px;
        }
        
        .opt-list-mob a:nth-child(1):hover {
            background: rgba(255, 166, 0, 0.164);
        }
        
        .opt-list-mob a:nth-child(2):hover {
            background: rgba(255, 0, 0, 0.178);
        }
    </style>

    <body id="body-well" class="body-404">
        <div style="text-align: -webkit-center;">
            <div style="width: fit-content; text-align: justify;">
                <h3 id="good"></h3>
            </div>
        </div>

        <div class="error">
            <img id="well-img" src="../src/svg/well.svg" />
        </div>
    </body>

</div>