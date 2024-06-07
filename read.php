<?php 
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);

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
        <div class="campoCabecera">
            Acción
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
                    <div class="campo">
                        <?=substr($row["mensaje"],0,51)?>...
                    </div>
                    <div class="btn-borrar">
                        <a href="borrar.php?id=<?=$row['id']?>">Borrar</a>
                    </div>
            </div>
        <?php
        }

        if($num===0){
            echo "No hay registros para mostrar";
        }
    ?>
</div>
<?php
    include 'footer.php';
?>