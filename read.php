<?php 
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);

    echo "<pre>";
    var_dump($result);
    echo $result->$num_rows;
    echo "</pre>";

?>
<h1>Mensajes</h1>
<div class="contenedor listado">
    <?php 
        while ($row = $result->fetch_assoc()){
            ?>
            <div class="fila">
                    <div class="campo"><?=$row['id']?></div>
                    <div class="campo"><?=$row['nombre']?></div>
                    <div class="campo"><?=$row['telefono']?></div>
                    <div class="campo"><?=$row['correo']?></div>
                    <div class="campo"><?=$row['mensaje']?></div>
            </div>
        <?php
        }
    ?>
</div>
<?php
    include 'footer.php';
?>