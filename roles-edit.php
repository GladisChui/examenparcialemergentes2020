<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

$id = 0;
$descripcion = '';

/*para editar*/
if (isset($_GET['id'])) {
  require_once('librerias/conexionBD.php');
  $sql = "select * from roles where id = " . $_GET['id'];
  $result = $conn->query($sql);
  $fila = $result->fetch_array();

  $id = $fila['id'];
  $descripcion = $fila['descripcion'];
}

require_once('librerias/cabe.php');
?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?php echo ($id > 0) ? 'Editar' : 'Nueva'; ?> Roles</h1>
      <form action="roles-procesa.php" method="post">
        <div class="form-group">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <label for="">Roles</label>
          <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="roles.php"><input type="button" class="btn btn-danger" value="Cancelar"></a>

      </form>
    </div>
  </div>
</div>
<?php
require_once('librerias/pie.php');
?>