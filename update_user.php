<h1>Atualizar usuário</h1>
<?php
  $sql = "SELECT * FROM users WHERE id =".$_REQUEST["id"];
  $response = $conn->query($sql);
  $row = $response->fetch_object();

  // print_r($row);
?>
<form action="?page=update" method="POST">
  <input type="hidden" name="update" value="update">
  <input type="hidden" name="id" value="<?= $row->id ?>">
  <div class="mb-3">
    <label for="name">Nome</label>
    <input type="text" name="name" class="form-control" value="<?=$row->name?>">
  </div>
  <div class="mb-3">
    <label for="email">Email</label>
    <input type="text" name="email" class="form-control" value="<?=$row->email?>">
  </div>
  <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" value="<?=$row->password?>" required>
  </div>
  <div class="mb-3">
    <label for="date_birth">Data de nascimento</label>
    <input type="date" name="date_birth" class="form-control" value="<?= $row->date_birth ?>">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">
      Enviar
    </button>
  </div>
</form>