<?php 
$pagTitle = "Lista de Estudantes";
require("dbcon.php");
include("comps/cabecalho.php");

?>




  
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