<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']=="GET"){
    $id = $_GET['id'];
    $sql = "DELETE FROM contactos WHERE id=?";
    $stmt = $conn->prepare($sql);

    //VINCULAR EL PARÀMETRE I EXECUTAR LA DECLARACIÓ
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    $msg="Registro borrado con éxito";
    header("Location: read.php?status=success&msg=" .$msg);
}