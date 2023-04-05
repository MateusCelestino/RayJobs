<?php 
  require_once 'model/vaga.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


  <form>
    <?php 
            $vaga = new vaga();
            $sel = $vaga->selecionar($_GET['id']);  
            if (count($_POST) > 0)
            {             
              $vaga->excluir($_GET['id']);              

              header("Location: lista_vaga.php");
            }
?>

          <p>Confirma a exclusão da vaga de: <?php echo $sel[0]['cargo']; ?></p>
          <p>Vaga do tipo: <?php echo $sel[0]['tipo_vaga']; ?></p>
          <p>Na cidade de : <?php echo $sel[0]['cidade']; ?></p>
    <button class="btn btn-danger" name="btn_sim">Sim</button>
            <a href="lista_vaga.php" class="btn btn-secondary">Não</a>
  </form>
          
</body>
</html>