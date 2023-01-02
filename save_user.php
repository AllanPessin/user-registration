<?php
  switch ($_REQUEST["action"]) {
    case 'save':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $date_birth = $_POST["date_birth"];

      $sql = "INSERT INTO users(name, email, password, date_birth) VALUES ('{$name}', '{$email}', '{$password}', '{$date_birth}' )";
      $response = $conn->query($sql);
    
      if ($response) {
        print "<script>alert('cadastro realizado com sucesso')</script>";
        print "<script>location.href='?page=list_user'</script>";
      } else {
        print "<script>alert('Houve um erro no cadastro')</script>";
      }
      break;
    case 'update':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $date_birth = $_POST["date_birth"];

      $sql = "UPDATE users SET name='{$name}', email='{$email}', password='{$password}', date_birth='{$date_birth}' WHERE id=".$_REQUEST["id"];

      $response = $conn->query($sql);
      
      if ($response) {
        print "<script>alert('Cadastro atualizado com sucesso')</script>";
        print "<script>location.href='?page=list_user'</script>";
      } else {
        print "<script>alert('Houve um erro ao editar')</script>";
        print "<script>location.href='?page=list_user'</script>";
      }
      break;
    case 'delete':
      $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
      $response = $conn->query($sql);
      
      if ($response) {
        print "<script>alert('Usuário excluído com sucesso')</script>";
        print "<script>location.href='?page=list_user'</script>";
      } else {
        print "<script>alert('Houve um erro ao excluir usuário')</script>";
        print "<script>location.href='?page=list_user'</script>";
      }      
      break;
    default:
      # code...
      break;
}
