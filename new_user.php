<h1>Novo usuário</h1>
<form action="?page=save" method="POST">
  <input type="hidden" name="action" value="save">
  <div class="mb-3">
    <label for="name">Nome</label>
    <input type="text" name="name" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="email">Email</label>
    <input type="text" name="email" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="password">Senha</label>
    <input type="password" name="password" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="date_birth">Data de nascimento</label>
    <input type="date" name="date_birth" id="" class="form-control" required>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">
      Enviar
    </button>
  </div>
</form>