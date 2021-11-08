
<div id="wellcome">
        <?php include 'wellcome.php' ; ?>
    </div>
    
    <div id="thelist">
        <div class='col-12 pat'>
            
           <?php include 'listas.php' ; ?>
        </div>
    </div> 


<div style="display:none; text-align: -webkit-center;" class="col-4 pv fastmode" id="fastmode"  >
    <div class="wrapper fast-list">
        <div class="fast-list-title align-items-center p-2">
            <i class="bi bi-lightning-charge-fill"></i>
            <span class="span"> Lista Rapída</span>
        </div>
        <div class="center">
            <div class="todo-input-container">
                <input type="text" name="todo" id="todo-text" class="todo-input" placeholder="nome do convidado(a)">
                <button class="todo-add-button" id="todo-add-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
            </button>
            </div>
            <ul class="todo-container" id="todo-container">
            </ul>
        </div>
    </div>
</div>
 