<center><h1 style="padding: 10px;">Editar Usuarios</h1></center>

<?php
  $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
  $res = $conn -> query($sql);
  $row = $res -> fetch_object();

?>
<center><img src="/CRUDphp/assets/img/illustrations/edit.svg" style="width: 30%!important;" alt=""></center>

<form action="?page=save" method="POST">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" value="<?php print $row -> id; ?>">


<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" value="<?php print $row -> name; ?>">
</div>

<div class="mb-3">
    <label>E-mail</label>
    <input type="email" name="email" class="form-control" value="<?php print $row -> email; ?>">
</div>

<div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control value="<?php print $row -> data_nasc; ?>">
</div>

<div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" class="form-control" required>
    <p>Digite sua senha para confirmar as mudanças desejadas</p>
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Atualizar</button>
</div>
</form>