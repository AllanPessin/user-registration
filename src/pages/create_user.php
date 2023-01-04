<h1>Criar novo usuário</h1>
<form action="?page=store" method="POST">
  <input type="hidden" name="action" value="store">
  <div>
    <label for="name">Nome</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="email">E-mail</label>
    <input type="text" name="email">
  </div>
  <div><label for="password">Senha</label>
    <input type="password" name="password">
  </div>
  <div>
    <label for="date_birth">Data de nascimento</label>
    <input type="date" name="date_birth">
  </div>
  <button type="submit">
    Enviar
  </button>
</form>