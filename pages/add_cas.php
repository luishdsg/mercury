<?php 
include "./verifi_d.php";

//LISTA
$sql_list = "select * from lista WHERE id = '$log_id'";
$result = mysqli_query($link, $sql_list);
$lists = mysqli_fetch_array($result);
$id_list = $lists['id_list'];
?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<style>
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
        margin: 0 8px;
        width: auto;   
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
        justify-content: flex-end;
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
    
    @media (max-width: 625px) {
        .form {
            max-width: 20em;
            max-height: 45rem;
        }
    }
</style>

<form  style="bottom: 10px;" action='../add_d.php' method="post" class='form bg-dark'>
    <h4>Adicionar na lista</h4>
    <p class='field required'>
        <label class='label required' for='name_list'>Nome completo</label>
        <input class='text-input' maxlength="30" id='nome_list' name='nome_list' required type='text'>
    </p>
    <input type="hidden" name="id_list" value="<?php echo $id_list; ?>"/>
    <p class='field required half'>
        <label class='label' for='number_list'>N° pessoas</label>
        <input class='text-input' id='' name='numero_list' type='number'>
    </p>
    <p class='field half'>
        <label class='label' for='phone'>Celular</label>
        <input class='text-input' id='phone' name='tel_list' onkeypress="$(this).mask('(00) 00000-00009')" type='tel'>
    </p>
    <div class='field'>
        <label class='label'>Acompanhante´s</label>
        <ul class='options'>
            <li class='option'>
                <input class='option-input' id='option-0' name='acomp_list' type='radio' value='Esposa'>
                <label class='option-label' for='option-0'>Esposa</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-1' name='acomp_list' type='radio' value='Namorada'>
                <label class='option-label' for='option-1'>Namorada</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-2' name='acomp_list' type='radio' value='Esposo'>
                <label class='option-label' for='option-2'>Esposo</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-3' name='acomp_list' type='radio' value='Namorado'>
                <label class='option-label' for='option-3'>Namorado</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-4' name='acomp_list' type='radio' value='Família'>
                <label class='option-label' for='option-4'>Família</label>
            </li>
            <li class='option'>
                <input class='option-input' id='option-5' name='acomp_list' type='radio' value='Sem'>
                <label class='option-label' for='option-5'>Sem</label>
            </li>

        </ul>
    </div>
    
    <div class='field'>
        <label class='label'>Convite por: </label>
        <ul class='options'>
            <li class='option'>
                <input class='option-input' id='noivo' name='convite_list' type='radio' value='Noivo'>
                <label class='option-label' for='noivo'>Noivo</label>
            </li>
            <li class='option'>
                <input class='option-input' id='noiva' name='convite_list' type='radio' value='Noiva'>
                <label class='option-label' for='noiva'>Noiva</label>
            </li>
        </ul>
    </div>
    
    <p class='field d-flex'>
        <a href="./home.php" class='button bg-danger'> Cancelar</a>
        <input class='button bg-primary' type='submit' value='Salvar'/>
    </p>
    
</form>