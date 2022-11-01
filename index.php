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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="./assets/css/headers.css" rel="stylesheet">

</head>

<body>
  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="./assets/img/favicon/favicon.ico" alt="">CadUSER
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="index.php" class="nav-link text-secondary">
                <img src="./assets/img/icons/home.svg" class="bi d-block mx-auto mb-1" width="24" height="24" alt="">
                Inicio
              </a>
            </li>
            <li>
              <a href="?page=newUser" class="nav-link text-white">
                <img src="./assets/img/icons/add-user.svg" class="bi d-block mx-auto mb-1" width="24" height="24" alt="">
                Cadastrar
              </a>
            </li>
            <li>
              <a href="?page=listUser" class="nav-link text-white">
                <img src="./assets/img/icons/list-user.svg" class="bi d-block mx-auto mb-1" width="24" height="24" alt="">
                Listar
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </header>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        include("./config/conn.php");
        switch (@$_REQUEST["page"]) {

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

          default:
            print '<div class="w-25 position-absolute top-50 start-50 translate-middle">';
            print '<img src="./assets/img/illustrations/Online page-cuate.svg" alt="...">';
            print '<p style="padding: 10px; font: size 20px;px;" class="lh-base ">Sistema desenvolvido para <strong>estudos</strong>, nessa painel você tem funções como <strong>cadastrar</strong>, <strong>editar </strong>, <strong>listar</strong> e <strong>excluir usuários</strong> que foram registrados em nosso banco de dados.</p>';
            print '</div>';
        }
        ?>
      </div>
    </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>