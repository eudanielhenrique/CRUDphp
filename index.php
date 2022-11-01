<html lang="pr-BR">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudo de CRUD PHP</title>

  <meta name="description" content="crud, php, create, reset, update, delete" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Bootstap CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./assets/img/favicon/favicon.ico" alt="">CadUSER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=newUser">Cadastrar</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=listUser">Listar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-12">

        <?php
        include("./config/conn.php");
            switch(@$_REQUEST["page"]){
              
              case "newUser":
                include_once("./pages/newUser.php");
                break;

              case "listUser":
                include_once("./pages/listUser.php");
                break;

              case "save":
                include_once("./pages/saveUser.php");
                break;

              case "editUser":
              include_once("./pages/editUser.php");
              break;
            }
        ?>
    </div>
  </div>
</div>
 <!-- JavaScript Bundle with Popper -->
 <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>