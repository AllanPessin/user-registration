<h1>Atualizar usuário</h1>
<?php
  $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];
  $data = $connection->query($sql)->fetch_object();
?>
<form action="?page=store" method="POST">
  <input type="hidden" name="action" value="update">
  <input type="hidden" name="id" value="<?=$data->id?>">
  <div>
    <label for="name">Nome</label>
    <input type="text" name="name" value="<?= $data->name ?>">
  </div>
  <div>
    <label for="email">E-mail</label>
    <input type="text" name="email" value="<?= $data->email ?>">
  </div>
  <div><label for="password">Senha</label>
    <input type="password" name="password" required>
  </div>
  <div>
    <label for="date_birth">Data de nascimento</label>
    <input type="date" name="date_birth" value="<?= $data->date_birth ?>">
  </div>
  <button type="submit">
    Enviar
  </button>
</form>