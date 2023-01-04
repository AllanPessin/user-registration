<h1>Lista de usuários</h1>
<?php
  $sql = "SELECT * FROM users";
  $response = $connection->query($sql);
  $amount = $response->num_rows;

  if ($amount > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Senha</th>";
    echo "<th>Data de nascimento</th>";
    echo "<th>Açoes</th>";
    echo "</tr>";
    while($data = $response->fetch_object()) {
      echo "<tr>";
      echo "<td>".$data->id."</td>";
      echo "<td>".$data->name."</td>";
      echo "<td>".$data->email."</td>";
      echo "<td>".$data->password."</td>";
      echo "<td>".$data->date_birth."</td>";
      echo "<td>
              <button onclick=\"location.href='?page=update&id=".$data->id."'\">
                Editar
              </button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir $data->name')){
                location.href='?page=delete&action=delete&id=$data->id'
              }\">
                Excluir
              </button>
           </td>";
      echo "</tr>";
    }
    echo "</table>";
  }
?>