<?php 
session_start();

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD PHP e MySQL</title>
  </head>
  <body>

    <div class="container">
        <div class="raw">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar estudantes
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                      <form action="codigo.php" method="POST">
                      <div class="mb-3">
                        <label for="">Nome do Estudante</label>
                        <input type="text" class="form-control" name="nome">
                      </div>
                      <div class="mb-3">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                      </div>
                      <div class="mb-3">
                      <div class="mb-3">
                        <label for="">Curso</label>
                        <input type="text" class="form-control" name="curso">
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-danger" name="add_est">Salvar Estudante</button>
                      </div>
                      </form>

                    </div>    
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>