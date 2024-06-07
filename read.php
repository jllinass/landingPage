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
    <div class="fila cabecera">
        <div class="campoCabecera">
            id
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensajes
        </div>
    </div>
    <?php 
        $num=0;
        while ($row = $result->fetch_assoc()){
            $num++;
            $paridad="inpar";
            if($num%2==0)
                $paridad="par";
            //PARIDAD M'INDICA SI LA FILA ÉS PAR O INPAR
            ?>
            <div class="fila <?=$paridad?>">
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