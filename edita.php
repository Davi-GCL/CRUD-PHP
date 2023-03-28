<?php 
session_start();

$pagTitle = "Editar Estudante";
require("dbcon.php");

include("comps/cabecalho.php");

?>


  <!--/Navbar -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-mb-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar estudantes
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                        if(isset($_GET["id"])){
                            $estudante_id = mysqli_real_escape_string($conn,$_GET["id"]);
                            $query = "SELECT * FROM estudantes WHERE ID='$estudante_id'";
                            $query_exe = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_exe) > 0){
                              $estudante= mysqli_fetch_array($query_exe);
                    ?>

                      <form action="codigo.php" method="POST">
                      <div class="mb-3">
                        <label for="">Nome do Estudante</label>
                        <input type="hidden" class="form-control" name="estudante_id" value="<?= $estudante_id?>">
                        <input type="text" class="form-control" name="nome" value="<?=$estudante['nome'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?=$estudante['email'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?=$estudante['telefone'];?>">
                      </div>
                      <div class="mb-3">
                      <div class="mb-3">
                        <label for="">Curso</label>
                        <input type="text" class="form-control" name="curso" value="<?=$estudante['curso'];?>">
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-danger" name="updt_est" type="submit">Salvar Estudante</button>
                      </div>
                      </form>
                      <?php 
                            }else{
                              echo "<h4>ID não encontrado </h4>";
                            }
                            
                          }
                      ?>
                    </div>    
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>