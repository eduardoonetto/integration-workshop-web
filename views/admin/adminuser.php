
<?php
require_once('views/templates/sidebar.php');
?> 
<h1><?php echo $titulo; ?> </h1>
<h4><?php echo $contenido; ?> </h4>

<form class="">
<br>
    <div class="col-md-4">
    <label for="name" class="visually-hidden">Nombre Completo</label>
    <input type="text" class="form-control" id="" placeholder="Juan P">
  </div>
  <br>
  <div class="col-md-4">
    <label for="email" class="visually-hidden">E-mail</label>
    <input type="text" class="form-control" id="" placeholder="Example@example.cl">
  </div>
  <br>
  <div class="col-md-4">
    <label for="password" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="" placeholder="Password">
  </div>
  <br>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success mb-3">Guardar</button>
  </div>
</form>
<h1>Ingresar Roles</h1>
<h4>registre roles a su sistema</h4>
<form class="">
<br>
    <div class="col-md-4">
    <label for="name" class="visually-hidden">Nombre Rol</label>
    <input type="text" class="form-control" id="" placeholder="Juan P">
  </div>
  <br>
  <br>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success mb-3">Guardar</button>
  </div>
</form>
<?php
require_once('views/templates/footer.php');
?>
