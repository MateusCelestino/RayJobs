<?php 
  require_once 'model/candidato.php';
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
                <li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li class="active"><a href="contato.php">Contato</a></li>
                <li><a href="cad_empresa.php"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Empresa</span></a></li>
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
        <h2 class="mb-0">Cadastrar Candidato</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>Candidato</span></p>
      </div>
    </div>    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8">
          
                      
            <form class="p-5 bg-white" method="post">
             <?php 
                  if (isset($_POST['nome']))
                    {
                      $candidato = new candidato();
                      $candidato->inserir($_POST);
                      echo '<div class="alert alert-success" role="alert" align="center">
                          Cadastro realizado! Faça seu <a href="login.php">Login</a>.
                        </div>';
                      unset($candidato);
                    } 
                  ?>
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Nome</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome completo" name="nome">
                </div>
              </div>


              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>CPF</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" id="nome" name="cpf" class="form-control" placeholder="000.000.000-00" name="cpf" mask="cpf">
                </div>
              </div>
       
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Data de nascimento</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="date" name="data_nascimento" class="form-control">
                </div>
              </div>              

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>E-mail</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" id="email" name="email" class="form-control" placeholder="email@exemplo.com.br" name="email">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Senha</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="password" class="form-control" placeholder="* * * * * *" name="senha">
                </div>
              </div>              

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Telefone</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="(99)99999-9999" mask ="telefone" name="telefone">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Endereço</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" id="endereco" class="form-control" placeholder="Rua, número" name="endereco">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Sexo</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select id="sexo" class="form-control"  name="sexo">
                            <option value="">Sexo</option>
                            <option name="sexo" value="masculino">Masculino</option>
                            <option name="sexo" value="feminino">Feminino</option>
                  </select>
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Disponibilidade</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <select class="form-control" name="disponibilidade" >
                            <option  value="">Em qual horário está disponível?</option>
                            <option value="Manhã">Manhã</option>
                            <option  value="Tarde">Tarde</option>
                            <option  value="Noite">Noite</option>
                            <option  value="Integral">Integral</option>
                  </select>
                </div>
              </div>
  

              <div class="row form-group">
                <div class="col-md-12"><h3>Experiências Anteriores</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="experiencias" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

             
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Cadastrar" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

        </div>
      </div>
    </div>

   

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Receba as melhores vagas no seu email</h2>
          </div>
        </div>
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="Digite seu email">
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