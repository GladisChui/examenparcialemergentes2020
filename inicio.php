<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}

require_once('librerias/cabe.php');


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Datos personales</h1>
            <img src="img/SISTEMAS.jpg" alt="">
            <ul>
                <li>UNIVERSIDAD PUBLICA DE EL ALTO</li>
                <li>ESTUDIANTES:	UNIV. GLADIS ANDREA CHUI CRUZ	</li>
                <li>R.U.:           200020112</li>
                <li>C.I.:           8296420</li>
            </ul>
        </div>
    </div>
</div>
<?php
require_once('librerias/pie.php');
?>