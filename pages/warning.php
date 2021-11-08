<?php 
include "./connect.php";

$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);
$lists = mysqli_fetch_array($result);
$id_list = $lists['id_list'];
?>
<style>
    .certainty {
        position: fixed;
        background: #100029ba;
        width: 100%;
        top: 0;
        left: 0;
        height: 100%;
        z-index: 10;
        text-align: -webkit-center;
    }
    
    .certaintyspace {
        width: calc(50%);
        background: rgb(0, 0, 0);
        max-width: 30rem;
        margin-top: calc(-20%);
        border-radius: 17px;
        padding: 1.3rem;
    }
    
    .certaintybl {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        -webkit-align-items: center;
        width: 100%;
        height: 100%;
    }
    
    .span {
        color: #ffffff8f;
    }
    
    .cancel {
        background: #202327;
        padding: 1em;
        transition: .2s;
    }
    
    .bord {
        border: 1px solid #ffffff52;
    }
    
    .cancel:hover {
        background: #202327d3;
    }
    
    .exclude {
        transition: .2s;
        color: white !important;
        padding: 1em;
        background: #d4006c;
    }
    .exclude a{
        padding: 1rem 3rem;
    }

    
    .exclude:hover {
        background: #ff009d;
    }
    
    #nometab {
        background: rgba(0, 0, 0, 0) !important;
        border: 2px solid rgba(20, 122, 255, 0.322);
    }
    
    @media(max-width: 500px) {
        .certaintyspace {
            width: calc(80%);
            background: rgb(0, 0, 0);
            max-width: 30rem;
            border-radius: 17px;
            padding: 1.3rem;
            margin-top: calc(-50%);
        }
        .exclude a{
        padding: 1rem;
    }
    }
</style>
<div id="certainty" style='display: none;' class="certainty">
    <div class="certaintybl justify-content-center">
        <div class="certaintyspace bord">
            <h4 class="h4">Deseja deletar lista <br/><?php echo $lists['nome']?>?</h4>
            <h6 class="span ph">Ao deletar esta lista todas as alterações nos itens e individuo(as) cadastradas serão excluidos <span class="">definitivamente</span> do sistema</h6>
            <div class="d-flex">
                <div class="col p-2 cursor">
                    <div onclick="cancel()"  class="radiu cancel">
                        <span class="text-light">Cancelar</span>
                    </div>
                </div>
                <div class="col p-2 cursor">
                    <div class="radiu exclude">
                        <a  class="text-light" href='del_d.php?id_list=<?php echo $id_list ?>' id="tanana">
                            Excluir
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>