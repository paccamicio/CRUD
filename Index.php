<?php
require_once 'Inicia.php';
$PDO = conecta_bd();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo_cadastro.css" media="screen">
    <title>Menu de Cadastro</title>
  </head>
  <body>
    <section>
        <div class="jumbotron">
            <h1 class="display-3">
              Menu de Cadastro
            </h1>
            <p class="lead">
              Lista completa dos cadastros realizados
            </p>
            <hr class="my-1">
        </div>
    </section>
    <p>
      <a href="Formulario.html">
        Novo Cadastro
      </a>
    </p>

    <?php
    $stmt_count = $PDO->prepare("SELECT COUNT (nome) FROM cadastroagenda6");
    $stmt_count->execute();
    $stmt = $PDO->prepare("SELECT codigo,nome,email,cidade,estado,cep,sexo,cartao_credito FROM cadastroagenda6 ORDER BY codigo");
    $stmt->execute();
    $total = $stmt_count->fetchColumn();?>
      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>CEP</th>
            <th>Sexo</th>
            <th>Cartao de Credito</th>
          </th>
        </thead>
        <tbody>
          <?php while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
              <td><?php echo $resultado ['codigo'] ?></td>
              <td><?php echo $resultado ['nome'] ?></td>
              <td><?php echo $resultado ['email'] ?></td>
              <td><?php echo $resultado ['cidade'] ?></td>
              <td><?php echo $resultado ['estado'] ?></td>
              <td><?php echo $resultado ['cep'] ?></td>
              <td><?php echo $resultado ['sexo'] ?></td>
              <td><?php echo $resultado ['cartao_credito'] ?></td>
              <td>
                <a href="form_altera.php?codigo=<?php echo $resultado ["codigo"] ?>">Alterar</a>
                <a href="exclui.php?codigo=<?php echo $resultado ["codigo"] ?>" onclick="return confirm('Tem certeza que deseja excluir o registro?')">Excluir</a>
              </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

    <footer>
        Rafaella Ballerini Ribeiro Gomes
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
