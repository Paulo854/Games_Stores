<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							
		                      <?php
                      include('/conexao/conexao.php');

                      if (!$conexao) {
                          die("Falha de conexão " . mysqli_connect_error());
                      }

                      $sql = "SELECT id, 
                                     usuario, 
                                     email,
                                     bloqueado
                              FROM usuarios";
                      $result = mysqli_query($conexao, $sql);

                      if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        echo $row["id"]. " - Nome: <b>" . $row["usuario"]. "</b> " . $row["email"]. "<br>" . $row["bloqueado"]. "<br>";
                          }
                      } else {
                          echo "0 results";
                      }

                      mysqli_close($conexao);
                      ?>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>