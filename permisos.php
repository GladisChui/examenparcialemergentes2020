<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');



$sql =  "select p.id, u.id as 'id_usuario', u.usuario, r.id as 'id_rol', r.descripcion from usuarios u, roles r, permisos p
where u.id=p.id_usuario AND r.id=p.id_rol order by p.id";
$result =  $conn->query($sql);
$permisos = array();
while ($fila =  $result->fetch_array()) {
    $permisos[] = $fila;
}
require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Permisos </h1>   
                <p>
                    <a href="permisos-edit.php" class="btn btn-success">Nuevo</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Id Usuario</th>
                        <th>Usuario</th>
                        <th>Id Rol</th>
                        <th>Descripcion</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($permisos as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td><?= $item['id_usuario']?></td>
                        <td><?= $item['usuario']?></td>
                        <td><?= $item['id_rol']?></td>
                        <td><?= $item['descripcion']?></td>
                        <td>
                        
                            <a href="permisos-edit.php?id=<?=$item['id']?>" class="btn btn-primary">Editar</a>
                           
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
                <h5 class="modal-title" id="exampleModalLabel">Eliminar permiso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Estas seguro de eliminar el registro ??
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <a href="permisos-elim.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>
<?php 
require_once('librerias/pie.php');
 ?>
