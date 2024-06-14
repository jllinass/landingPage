<?php
include "db.php";
include 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM contactos WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $contacto = $result->fetch_assoc();
            ?>
            <div class="missatges">
                <div class="visualitzar"><strong>ID:</strong><?=$contacto['id']?></div>
                <div class="visualitzar"><strong>Nombre:</strong><?=$contacto['nombre']?></div>
                <div class="visualitzar"><strong>Correo:</strong><?=$contacto['correo']?></div>
                <div class="visualitzar"><strong>Teléfono:</strong><?=$contacto['telefono']?></div>
                <div class="visualitzar"><strong>Mensaje:</strong><?=$contacto['mensaje'] ?></div>
            </div>
            <?php
        } else {
            echo "No s'ha trobat cap contacte amb aquest ID.";
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparació de la declaració SQL.";
    }
    
    // Tancar la connexió
    $conn->close();
}
?>