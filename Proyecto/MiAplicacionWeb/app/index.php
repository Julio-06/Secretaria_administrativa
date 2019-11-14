<?php
$conn = new mysqli("mysql", "root", "juliotupapiriko06", "Secretaria_administrativa");
// Verifica conexión
if ($conn->connect_error) {
	die("La conexión falló: " . $conn->connect_error);
}else echo "Conexión exitosa";

$sql = "SELECT titulo FROM diplomados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Datos de salida de cada registro
	while($row = $result->fetch_assoc()) {
		echo $row['titulo']."<br>";
	}
} else {
	echo "Ningún resultado para la tabla usuarios";
}
$conn->close();
?>
