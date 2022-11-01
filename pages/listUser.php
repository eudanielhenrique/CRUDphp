<center><h1 style="padding: 10px;">Listar Usuarios</h1></center>

<?php
  $sql = "SELECT * FROM usuarios";
  $res = $conn -> query($sql);
  $qtd = $res -> num_rows;

  if ($qtd > 0){
    print '<center><img src="/CRUDphp/assets/img/illustrations/Online wishes list-rafiki.svg" style="width: 30%!important;" alt=""></center>';
    print "<div class='border border-dark rounded'>";
    print "<table class='table table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    
    while($row = $res -> fetch_object()){
      print "<tr>";
      print "<td>".$row -> id."</td>";
      print "<td>".$row -> name."</td>";
      print "<td>".$row -> email."</td>";
      print "<td>".$row -> data_nasc."</td>";
      print "<td>
      <button onclick=\"location.href='?page=editUser&id=".$row->id."';\" class='btn btn-success'>Editar</button> |

      <button onclick=\"if(confirm('Tem certeza que seja excluir?')){location.href='?page=save&action=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>

      </td>";
      print "</tr>";
    }
    print "</table>";
    print "</div>";
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

  }else{
    print "<div class='alert alert-danger'>Nenhum usuario cadastrado!</div>";
  }