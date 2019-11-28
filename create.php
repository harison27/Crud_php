<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Membro</title>

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
	<legend>Adicionar Membro</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nome</th>
				<td><input type="text" name="fname" placeholder="Primeiro Nome" /></td>
			</tr>		
			<tr>
				<th>Sobrenome</th>
				<td><input type="text" name="lname" placeholder="Sobrenome" /></td>
			</tr>
			<tr>
				<th>Idade</th>
				<td><input type="text" name="age" placeholder="Idade" /></td>
			</tr>
			<tr>
				<th>Contato</th>
				<td><input type="text" name="contact" placeholder="Contato" /></td>
			</tr>
			<tr>
				<td><button type="submit">Salvar</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>
