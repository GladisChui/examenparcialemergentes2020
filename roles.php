<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');
$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}
require_once('librerias/cabe.php');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Roles</h1>
            <p>
                <a href="roles-edit.php" class="btn btn-success">Nuevo</a>
            </p>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($roles as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['descripcion'] ?></td>
                        <td>
                            <a href="roles-edit.php?id=<?php echo $item['id'] ?>" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Rol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Estas seguro de eliminar el registro ??
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <a href="roles-elim.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>
<?php
require_once('librerias/pie.php');
?>