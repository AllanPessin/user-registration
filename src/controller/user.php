<?php
  switch ($_REQUEST["action"]) {
    case 'store':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $date_birth = $_POST["date_birth"];

      $sql = "INSERT INTO users (name, email, password, date_birth) VALUES ('{$name}', '{$email}', '{$password}', '{$date_birth}')";
      
      $response = $connection->query($sql);     
      break;
      
    case 'update':
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = md5($_POST["password"]);
      $date_birth = $_POST["date_birth"];

      $sql = "UPDATE users SET name='{$name}', email='{$email}', password='{$password}', date_birth='{$date_birth}' WHERE id=".$_REQUEST["id"];
      
      $response = $connection->query($sql);     
      break;

    case 'delete':
      print_r($_REQUEST["id"]);
      $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];
      $response = $connection->query($sql);

      break;    
    default:
      # code...
      break;
  }
  