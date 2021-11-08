<script>
$(function(){ 

$("#search-table").keyup(function(){
  var texto = $(this).val();
  
  $(".card-body").each(function(){
    var resultado = $(this).text().toUpperCase().indexOf(' '+texto.toUpperCase());
    
    if(resultado < 0) {
      $(this).fadeOut(200);
    }else {
      $(this).fadeIn(200);
    }
  }); 

});

});


</script>
<header class="header-nav ml-2 mr-2 d-flex p-2 bg-dark">
    <div onclick="opsetbar()" class="box-mobile bg-dark">
        <i class="bi bi-archive fa-2x"></i>
    </div>
    <form method="post" action="" class="col align-self-center ph">

        <label for="search-table" id="label-search">
                    <i class="bi bi-search"></i>
                </label>
        <input type="search" class="search" placeholder="procurar... " id="search-table" />
    </form>

    <div class="col-2 "> 
            <a class="d-flex sla cursor w-fit p-2" onclick="opedit()" data-toggle="tooltip" data-placement="bottom" title="perfil do ususario"> 
                <div class="img-prof-set"></div>
                <span id="nome-adm"  class="d-inline-block text-truncate p-1" style="max-width: 100px;">⠀<?php echo $log_nome ?></span>
            </a>
    </div>
</header>

<script>
  function opsetbar() {
    document.getElementById("clsetbar").style.display = "block";
    document.getElementById("main").style.display = "block";
    document.getElementById("opsetbar").style.display = "none";

}

function clsetbar() {
    document.getElementById("clsetbar").style.display = "none";
    document.getElementById("main").style.display = "none";
    document.getElementById("opsetbar").style.display = "block";
}
</script>
