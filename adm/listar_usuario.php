<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Alexandre">
    <!-- <link rel="icon" href="../../favicon.ico"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">
    <title>Administrativo</title>
    <link href="css/bootstrap_adm.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body role="document">
      <?php
        include_once("menu_admin.php");
        $resultado = mysqli_query($link, "SELECT * FROM usuarios ORDER BY 'id'");
        $linhas = mysqli_num_rows($resultado);
      ?>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Lista de Usuário</h1>
      </div>
    <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>NÍVEL DE ACESSO</th>
                <th>AÇÕES</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    while($linhas = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo "<td>".$linhas['id']."</td>";
                        echo "<td>".$linhas['nome']."</td>";
                        echo "<td>".$linhas['email']."</td>";
                        echo "<td>".$linhas['nivel_acesso_id']."</td>";
                        echo "<td>Editar - Visualizar - Apagar</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
          </table>
        </div>
    </div>
    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>