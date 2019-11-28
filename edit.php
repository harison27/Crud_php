<?php 

require_once 'php_action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM members WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Editar Membro</legend>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
				<td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>" /></td>
			</tr>		
			<tr>
				<th>Sobrenome</th>
				<td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>" /></td>
			</tr>
			<tr>
				<th>Idade</th>
				<td><input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>" /></td>
			</tr>
			<tr>
				<th>Contato</th>
				<td><input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Salvar</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>
