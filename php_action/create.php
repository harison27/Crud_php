<?php 

require_once 'db_connect.php';

if($_POST) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];

	$sql = "INSERT INTO members (fname, lname, contact, age, active) VALUES ('$fname', '$lname', '$contact', '$age', 1)";
	if($connect->query($sql) === TRUE) {
		echo "<p>Salvo com sucesso</p>";
		echo "<a href='../create.php'><button type='button'>Voltar</button></a>";
		echo "<a href='../index.php'><button type='button'>Inicio</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>
