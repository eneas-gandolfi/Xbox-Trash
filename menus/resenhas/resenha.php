<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>XBOX TRASH</title>
    
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
     <!-- Java Script BootStrap-->   
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS do Projeto-->
    <link rel="stylesheet" href="style-resenha.css">  
</head>

<body>
  
  <!--NavBar-->
  <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
    <div class="container py-3">
        <a href="#" class="navbar-brand">
            <img src="img/icone-fav.png"  width="80px" alt="TRASH">
            <span>XBOX TRASH</span>
        </a>
        <button 
        class="navbar-toggler"
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbar-items"
        aria-controls="navbar-items"
        aria-expanded="false"
        aria-label="toggle navigation"
    >
        <i class="bi bi-list"> </i>
        </button>
        <div class="collapse navbar-collapse"id="navbar-items">
            <ul class="navbar-nav me-auto mb-lg-0"></ul>
            <ul class="nav-item">
                <a href="/index.html" class="nav-link active primary-color">Início</a>
            </ul>
            <ul class="nav-item">
                <a href="/menus/games trash/games-trash.html" class="nav-link primary-color">Games Trash</a>
            </ul>
            <ul class="nav-item">
                <a href="resenha.php" class="nav-link primary-color">Resenhas</a>
            </ul>
            <ul class="nav-item">
                <a href="/menus/contato/contato.html" class="nav-link primary-color">Contato</a>
            </ul>
            <ul class="nav-item">
              <a href="/menus/login/login.html" class="nav-link primary-color">Login</a>
          </ul>
        </div>
    </div>     
    </nav>
  
    <!--PHP-->
  <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    
    <!--Forms-->
    
    <div class="container">
        <div class="row">
          <div class="col">
    
          </div>
          <div class="col">
          <form method="POST" action="proc_cad_msg.php"><br><br><br><br><br><br>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="name" class="form-control" name="Nome">
            
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Digite seu email</label>
                  <input type="email" class="form-control" name="Email">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escreva sua resenha</label>
                    <textarea class="form-control" name="Resenha" rows="6"></textarea>
                  </div>
                  <input name="envia" type="submit" class="btn btn-primary" value="Cadastrar">
              </form>
              <a href="lista.php"><br> Todas as resenhas </a>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
    </div>
    
    