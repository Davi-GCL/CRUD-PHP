<?php

if($pagTitle == "Lista de Estudantes"){
    $btn_inicio = "active";
}else if($pagTitle == "Cadastrar Estudantes"){
    $btn_estudantes = "active";
}else {
    $btn_contato = "ative";
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand"><img src="img/fbtech_logo.png" alt="logo da fbtech" class="img-fluid" style="width:30%;"></a>
      <div class="navbar-expand">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link <?=$btn_inicio?>">Início</a>
          </li>
          <li class="nav-item">
            <a href="estudantes.php" class="btn nav-link <?=$btn_estudantes?>">Estudante</a>
          </li>
          <li class="nav-item">
            <a href="" class="btn nav-link">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>