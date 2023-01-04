<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de usuário</title>
</head>

<body>
  <nav>
    <span>Cadastre usuários</span>
    <ul>
      <li>
        <a href="index.php">Inicial</a>
      </li>
      <li>
        <a href="?page=new">Novo usuário</a>
      </li>
      <li>
        <a href="?page=show">Listar usuário</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">
      <?php
        include('../database/connection.php');
        switch (@$_REQUEST["page"]) {
          case 'new':
            include("create_user.php");
            break;
          case 'store':
            include("../controller/user.php");
            break;
          case 'show':
            include("list_user.php");
            break;
          case 'update':
            include("update_user.php");
            break;
          case 'delete':
            include("../controller/user.php");
            break;
          default:
            print '<h1>Bem vindo</h1>';
            break;
        }
      ?>
    </div>
  </div>

</body>

</html>