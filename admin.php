<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
</head>

<?php  
	
	session_start();

	if(!isset($_SESSION['utdexec3'])){
		header("location: index.php?msg=acesso_nao_permitido");
	}

	
?>


<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<center>

<div class="p-3 mb-2  bg-danger text-white">


	

			
			
				<label><font size="40" face="verdana">Bem-vindo</font></label><br>
				
				
		

	</div>


<br>
<br>
<div class="p-3 mb-2 bg-info text-dark">
<label><font size="40" face="verdana">Você esta na área do Administrador !!!</font></label><br>

</div>
<br>
<br>

<div class="p-3 mb-2 bg-warning text-dark">


			
			<a href="form.php"class="btn btn-primary"	> Cadastrar </a>	
			<a href="listagem.php"class="btn btn-primary"> Listar </a>   
			<a href="logout.php"class="btn btn-primary"> SAIR </a>
		

</div>
</center>
</body>

</html>