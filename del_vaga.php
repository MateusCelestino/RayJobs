<?php
  require_once 'model/vaga.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>RayJobs &mdash; Vagas de Empregos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                <li class="has-children">
                  <a href="category.php">Categoria</a>
                  <ul class="dropdown">
                    <li><a href="#">Tempo Integral</a></li>
                    <li><a href="#">Meio Período</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Estágio</a></li>
                    <li><a href="#">Temporário</a></li>
                  </ul>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="active"><a href="contato.php">Contato</a></li>
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

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Vagas Cadastradas</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>Empresa</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
 <div class="form-group col-12">
<div class="container">
    <form method="post">
      <div class="row">
        <div class="col-12">
          <div class="alert alert-warning" role="alert">
          <h4 class="alert-heading">Excluir!!</h4>
          <?php
            $vaga = new vaga();
            $sel = $vaga->selecionar($_GET['id']);  
            if (count($_POST) > 0)
            {             
              $vaga->excluir($_GET['id']);
              echo '<script>window.location="lista_vaga.php"</script>'; 
            }
            ?>

          <p>Confirma a exclusão da vaga de: <?php echo $sel[0]['cargo']; ?></p>
          <p>Vaga do tipo: <?php echo $sel[0]['tipo_vaga']; ?></p>
          <p>Na cidade de : <?php echo $sel[0]['cidade']; ?></p>
          
          
          <p class="mb-0">
            <button class="btn btn-danger" name="btn_sim">Sim</button>
            <a href="lista_vaga.php" class="btn btn-secondary">Não</a>
          </p>
        </div>
        </div>
      </div>
    </form>
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
  

  <script src="js/main.js"></script>
    
  </body>
</html>