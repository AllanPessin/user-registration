<h1>Listar</h1>
<?php
  $sql = "SELECT * FROM users";
  $response = $conn->query($sql);
  $qtd = $response->num_rows;

  if ($qtd > 0) {
    print("<table class='table table-hover table-striped table-bordered'>");
    print("<tr>");
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Data de nascimento</th>";
    print "<th>Ações</th>";
    print("</tr>");        
    while($row = $response->fetch_object()) {
        print("<tr>");
        print "<td>".$row->id."</td>";
        print "<td>".$row->name."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->date_birth."</td>";
        print "<td>
                  <button class='btn btn-success' onclick=\"location.href='?page=update&id=".$row->id."'\">
                    Editar
                  </button>
                  <button class='btn btn-danger' 
                    onclick=\" 
                      if(confirm('Tem certeza que deseja excluir $row->name')) {
                        location.href='?page=save&action=delete&id=".$row->id."';
                      }
                     \" >
                    
                    Exluir
                  </button>
              </td>";
        print("</tr>");        
      }
    print("</table>");      
  } else {
    print("<p class='alert alert-danger'>Nenhum resultado encontrado</p>");
  }
?>