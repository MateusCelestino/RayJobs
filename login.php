<?php 
require_once('model/empresa.php');
require_once('model/vaga.php');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>RayJobs &mdash; Vagas de Empregos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Ray<strong>Jobs</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="cad_empresa.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Empresa</span></a></li>
                <li><a href="cad_candidato.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Candidato</span></a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-8">
            <h1 class="mb-2 text-black w-75"><span class="font-weight-bold">Faça </span> seu login!</h1>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Empresa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">Candidato</a>
                </li>
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="text" class="form-control" placeholder="CNPJ" name="txt_cnpj" mask="cnpj">
                      </div>
                      
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="password" class="form-control form-control-block search-input" id="autocomplete" placeholder="* * * * * *" name="txt_senha">
                      </div>
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Entrar" name="btn_login_empresa">

                        <?php 
                        
                        if (isset($_POST['btn_login_empresa'])){
                            $empresa = new empresa();
                            $resultado = $empresa->consultarUsuario($_POST['txt_cnpj'], $_POST['txt_senha']);
                            if(count($resultado)>0){
                              echo '<script type="text/javascript">window.location="lista_vaga.php"</script>';
                            }

                            unset($empresa);
                            unset($resultado);
                        }
                         ?>

                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="text" class="form-control" placeholder="CPF" mask="cpf">
                      </div>
                      
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="password" class="form-control form-control-block search-input" id="autocomplete" placeholder="* * * * * * ">
                      </div>
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Entrar" name="btn_login_candidato">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Últimas vagas cadastradas</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="cad_empresa.php" class="btn btn-primary py-3 btn-block"><span class="h5">+</span> Poste um emprego </a>
          </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
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

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

         </div>
         </div>
        </div>

        


      </div>
    </div>    


    

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Receba novidades no seu email</h2>
          </div>
        </div>  
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="email@email.com.br">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">  
          </div>
        </form>
      </div>
    </div>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/EasyMask"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>