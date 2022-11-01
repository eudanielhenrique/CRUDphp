<center><h1 style="padding: 10px; ">Novo usuario</h1></center>

<div class="container">
<form action="?page=save" method="POST">
  <input type="hidden" name="action" value="register">

<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
    <label>E-mail</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
    <label>Senha</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control">
</div>

<div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
</div>