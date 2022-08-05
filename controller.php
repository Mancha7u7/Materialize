<?php
//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost", "root", "", "materialize");

//obtenemos los valores del formulario
$nombres = $_POST['nombreuser'];
$apellidos = $_POST['apellidosuser'];
$email = $_POST['emailuser'];
$p1 = $_POST['pre1'];
$p2 = $_POST['pre2'];
$p3 = $_POST['pre3'];
$p4 = $_POST['pre4'];
$p5 = $_POST['pre5'];
$p6 = $_POST['pre6'];
$p7 = $_POST['pre7'];
$p8 = $_POST['pre8'];
$p9 = $_POST['pre9'];
$p10 = $_POST['pre10'];

if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: %s\n" . $mysqli->connect_error;
	exit();
}


//ingresamos la informacion a la base de datos
if ($resultado = $mysqli->query("INSERT INTO feedback (Nombre, Apellido, Email, Pregunta1, Pregunta2, Pregunta3, Pregunta4, Pregunta5, Pregunta6, Pregunta7, Pregunta8, Pregunta9, Pregunta10) VALUES ('$nombres', '$apellidos', '$email', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10')")) {
	echo "Feedback enviado correctamente";

	//se cierra la conexion con la base de datos
	$mysqli->close();
};
?>
<script>
	alert("Registro Exitoso");
	location.href = "index.html";
</script>
