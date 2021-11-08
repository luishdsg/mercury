<style>
    .cad-list {
        position: fixed;
        background-image: linear-gradient( 320deg, #560044c7, #00064adb);
        width: 100%;
        top: 0;
        left: 0;
        height: 100%;
        z-index: 10;
        text-align: -webkit-center;
    }
    
    .create-list {
        width: calc(50%);
        background: rgb(0, 0, 0);
        max-width: 30rem;
        margin-top: calc(7%);
        border-radius: 10px;
        color: #fff;
    }
    
    #nometab {
        font-weight: bold;
        background: rgba(0, 0, 0, 0) !important;
        border: 2px solid rgba(20, 122, 255, 0.322);
    }
    
    .cancelar {
        background: #202327;
        padding: 1em;
        transition: .2s;
    }
    
    .cancelar:hover {
        background: #2f3338;
    }
    
    .enviar {
        transition: .2s;
        color: white !important;
        padding: 1em;
        background: #d4006c;
    }
    
    #tanana {
        background: none !important;
        font-weight: none !important;
        border: none !important;
        margin: 0 !important;
        padding: 2px 0 !important;
    }
    
    .enviar:hover {
        background: #ff009d;
    }
    
    @media(max-width: 650px) {
        .create-list {
            width: calc(80%);
            background: rgb(0, 0, 0);
            max-width: 30rem;
            margin-top: calc(20%);
            border-radius: 10px;
            color: #fff;
        }
        .enviar {
            padding: 1rem;
        }
    }
    
    fieldset {
        border: none;
    }
    
    fieldset div {
        display: flex;
        flex-wrap: wrap;
        margin-top: 0.5rem;
        justify-content: center;
    }
    
    input[type=radio] {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(100%);
        clip-path: inset(100%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }
    
    input[type=radio]:checked+span {
        box-shadow: 0 0 0 0.0625em #0043ed;
        background-color: rgba(0, 102, 255, 0.123);
        z-index: 1;
        color: #0043ed;
    }
    
    label span {
        display: block;
        cursor: pointer;
        border-radius: 10rem;
        border: 1px solid rgba(255, 255, 255, 0.199);
        background-color: rgba(0, 102, 255, 0.062);
        padding: 0.375em 0.75em;
        position: relative;
        margin: 4px;
        letter-spacing: 0.05em;
        color: #ffffffad;
        text-align: center;
        transition: background-color 0.5s ease;
    }
</style>
<div id="create-list" style='display: none;' class="cad-list ">
    <div class="create-list pabb">
        <h4 class="d-flex align-itens-center pat container"><i class="bi ph bi-list"></i>Criar nova lista</h4>
        <form class="form-create-list ph" method="post" action="../createlist_d.php">
            <div class="row">
                <div style="text-align:left;" class="col pat">
                    <input type="hidden"  value="<?php echo $log_id ?>" />
                    <input type="text" maxlength="46" name="nome-tab" id="nometab" placeholder="digite o nome da lista" />
                </div>
                <div class="col-12 patt ">
                    <fieldset>
                        <p>Escolha e selecione o tipo de lista que deseja</p>
                        <div>
                            <label>
                                <input type="radio"  id="Casamento" name="tipo-list" value="Casamento" checked/>
                                <span>Casamento</span>
                            </label>

                            <label>
                                <input type="radio"  id="Encontro"  name="tipo-list"  value="Encontro social"/>
                                <span>Encontro social</span>
                            </label>

                            <label>
                                <input type="radio" id="Aniversario"  name="tipo-list" value="Aniversario"/>
                                <span>Aniversário</span>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div class="d-flex">
                    <div class="col p-2 cursor">
                        <div onclick="clcrelist()" class="radiu enviar">
                            <span class="text-light">Cancelar</span>
                        </div>
                    </div>
                    <div class="col p-2 cursor">
                        <div class="radiu cancelar">
                            <input type="submit" class="text-light" id="tanana" value="Enviar" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>