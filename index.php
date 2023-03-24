<?php 
require("dbcon.php");

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista de Estudantes</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand"><img src="img/fbtech_logo.png" alt="logo da fbtech" class="img-fluid" style="width:30%;"></a>
      <div class="">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">Início</a>
          </li>
          <li class="nav-item">
            <a href="estudantes.php" class="btn nav-link ">Estudante</a>
          </li>
          <li class="nav-item">
            <a href="" class="btn nav-link">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/Navbar -->
  
    <div class="container mt-3">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Estudantes <a href="estudantes.php" class="btn btn-primary float-end">Adicionar Estudantes</a></h4>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped">
                        <thead>
                          <th>ID</th>
                          <th>Nome Estudante</th>
                          <th>E-mail</th>
                          <th>Telefone</th>
                          <th>Curso</th>
                          <th>Ações</th>
                        </thead>
                        <tbody>
                          <!-- Nesta parte entra o codigo de conexao e exibicao da base de dados (consulta sql de todos registros)  -->
                          <?php 
                          
                          $query = "SELECT * FROM estudantes";
                          $query_exe = mysqli_query($conn,$query);

                          if(mysqli_num_rows($query_exe) > 0){
                            foreach($query_exe as $estudante){

                          
                          ?>
                          <!-- Linhas da tabela (que serao impressas repetidamente) -->
                          <tr>
                            <td><?= $estudante['ID']?></td>
                            <td><?= $estudante['nome']?></td>
                            <td><?= $estudante['email']?></td>
                            <td><?= $estudante['telefone']?></td>
                            <td><?= $estudante['curso']?></td>
                            <td>
                              <a href="visualiza.php" class="btn btn-info btn-sm">Visualizar</a>
                              <a href="edita.php" class="btn btn-success btn-sm">Editar</a>
                              <a href="exclui.php" class="btn btn-danger btn-sm">Excluir</a>
                            </td>

                          </tr>

                          <?php 
                            }
                          }else{echo"Nenhum registro encontrado";}
                          ?>

                          <!-- Linhas da tabela: -->
                        </tbody>
                      </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

  <!-- Desafio: inserir em todos os arquivos do sistema do sistema CRUD (arquivos de visualizacao):
 -um mesmo cabeçalho (header) para todas as paginas com a tag 'title' trazendo uma variavel php para apresentacao do nome da pagina;
 -um banner com uma variavel php para apresentacao do nome de cada pagina;
 -uma barra de navegacao com os seguintes links: inicio, estudantes e contato;
 -um mesmo rodape(footer) para todas as paginas do CRUD com os seguinte texto de credito: 2023, FBTECH. Todos os difeitos reservados;
-->
</html>