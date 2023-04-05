<?php 
      $vaga = new vaga();
      if (isset($_POST['btn_pes_cand'])) 
      {
        $lista = $vaga->listarPesquisa($_POST['vaga'], $_POST['cidade']);
      }else
      {
        $lista = $vaga->listar();
      }
      
      foreach ($lista as $linha => $coluna) {
        echo '<div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">'.$coluna['cargo'].'</h2>
                 <div class="badge-wrap">
                  <span class="bg-primary text-white badge py-2 px-4">'.$coluna['tipo_vaga'].'</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">'.$coluna['nome_empresa'].'</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>'.$coluna['cidade'].'</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="job-single.html" class="btn btn-primary py-2">Aplicar</a>
              </div>
           </div>

         </div>
        </div>';
      }
      unset($vaga);
      unset($lista);
    ?>


    <?php 
      $vaga = new vaga();
      $lista = $vaga->listar();
      foreach ($lista as $linha => $coluna) {
        echo '<div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">'.$coluna['cargo'].'</h2>
                 <div class="badge-wrap">
                  <span class="bg-primary text-white badge py-2 px-4">'.$coluna['tipo_vaga'].'</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">'.$coluna['nome_empresa'].'</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>'.$coluna['cidade'].'</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="job-single.html" class="btn btn-primary py-2">Aplicar</a>
              </div>
           </div>

         </div>
        </div>';
      }
      unset($vaga);
      unset($lista);
    ?>