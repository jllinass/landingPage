<?php 
//paràmetres de connexió
$servername="localhost";
$username="joan";
$password="Elmejor#llinas";
$dbname="formacion";

//crear la connexió
$conn=new mysqli($servername,$username,$password,$dbname);

//comprobar la connexió
if($conn->connect_error){
    //la connexió ha anat malament
    die("Connection failed: ". $conn->connect_error);
}

//echo "LA CONEXIÓN HA SIDO UN ÉXITO";