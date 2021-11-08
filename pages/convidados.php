
<div style="border: none;" class='card mt-2 bg-transparent'>
  <?php
  //POST-CASAMENTO
  while($dados = mysqli_fetch_array($posts)){
    echo 
    " <div class='card-body mt-1 bg-dark mb-1 rounded'>
        <div class='card-subtitle d-flex justify-content-between align-items-center mb-2 text-muted'>
            <div class='d-flex align-items-center '>
              <h6 >".$dados['id_post']. "</h6>
              <h6 class='elipse'> - ". $dados['nome_list'] ."</h6>
            </div>
            <div class='opt-list-mob'>
                  <a href='../pages/edit.php?id_post=$dados[id_post] data-toggle='tooltip' data-placement='top' title='editar item'>
                     <i class='bi bi-pen'></i>
                  </a>
                  <a href='delete_d.php?id_post=$dados[id_post]' class='text-danger' data-toggle='tooltip' data-placement='top' title='excluir item'>
                     <i class='bi bi-trash'></i>
                  </a>
            </div>
        </div>
              <div class='card  bg-dark '>
                    <ul class='list-group text-white list-group-flush'>
                        <li class=' text-white bg-dark list-group-item d-flex'> Acompanhante:⠀  <h6 class='h6'>" . $dados['acomp_list'] . "</h6></li>
                        <li class=' text-white bg-dark list-group-item d-flex'> N°pessoas:⠀  <h6 class='h6'>"  . $dados['numero_list'] . "</h6></li>
                        <li class=' text-white bg-dark list-group-item d-flex'> Celular:⠀  <h6 class='h6'>"  . $dados['tel_list'] . "</h6></li>
                        <li class=' text-white bg-dark list-group-item d-flex'> Convidante:⠀  <h6 class='h6'>" . $dados['convite_list'] . "</h6></li>
                    </ul>
              </div>
      </div>
        ";
 }
 
   //POST-ANIVESARIO
   while($dados_niver = mysqli_fetch_array($postniver)){
    echo 
    " <div class='card-body mt-1 bg-dark mb-1 rounded'>
        <div class='card-subtitle d-flex justify-content-between align-items-center mb-2 text-muted'>
            <div class='d-flex align-items-center '>
              <h6 >".$dados_niver['id_postniver']. "</h6>
              <h6 class='elipse'> - ". $dados_niver['nome_list'] ."</h6>
            </div>
            <div class='opt-list-mob'>
                  <a href='../pages/editniver.php?id_postniver=$dados_niver[id_postniver] data-toggle='tooltip' data-placement='top' title='editar item'>
                     <i class='bi bi-pen'></i>
                  </a>
                  <a href='deleteniver_d.php?id_postniver=$dados_niver[id_postniver]' class='text-danger' data-toggle='tooltip' data-placement='top' title='excluir item'>
                     <i class='bi bi-trash'></i>
                  </a>
            </div>
        </div>
              <div class='card  bg-dark '>
                    <ul class='list-group text-white list-group-flush'>
                        <li class=' text-white bg-dark list-group-item d-flex'>Acompanhante:⠀  <h6 class='h6'>". $dados_niver['acomp_list'] . "</h6></li>
                        <li class=' text-white bg-dark list-group-item d-flex'>N°pessoas:⠀  <h6 class='h6'>"  . $dados_niver['numero_list'] . "</h6></li>
                    </ul>
              </div>
      </div>
        ";
 }
 
   //POST-SOCIAL
   while($dados_social = mysqli_fetch_array($postsocial)){
    echo 
    " <div class='card-body mt-1 bg-dark mb-1 rounded'>
        <div class='card-subtitle d-flex justify-content-between align-items-center mb-2 text-muted'>
            <div class='d-flex align-items-center '>
              <h6 >".$dados_social['id_postsocial']. "</h6>
              <h6 class='elipse'> - ". $dados_social['nome_list'] ."</h6>
            </div>
            <div class='opt-list-mob'>
                  <a href='../pages/editsocial.php?id_postsocial=$dados_social[id_postsocial] data-toggle='tooltip' data-placement='top' title='editar item'>
                     <i class='bi bi-pen'></i>
                  </a>
                  <a href='deletesocial_d.php?id_postsocial=$dados_social[id_postsocial]' class='text-danger' data-toggle='tooltip' data-placement='top' title='excluir item'>
                     <i class='bi bi-trash'></i>
                  </a>
            </div>
        </div>
              <div class='card  bg-dark '>
                    <ul class='list-group text-white list-group-flush'>
                        <li class=' text-white bg-dark list-group-item d-flex'>N°pessoas:⠀  <h6 class='h6'>".$dados_social['numero_list']."</h6></li>
                          <li class=' text-white bg-dark list-group-item d-flex'> Celular:⠀  <h6 class='h6'>". $dados_social['tel_list'] . "</h6></li>
                    </ul>
              </div>
      </div>
        ";
 }
 
?>
 </div>