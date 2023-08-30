<?php 
	session_start();
	if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="image/png" href="icon3.png">
	<link rel="stylesheet"  media="'screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body onload="mostrar();">
		<a href="index.php">
			<figure>
			<img id="icon"src ="icon4.png" title="Pagina inicial"><figcaption></figcaption>
			</figure>
		</a>
		<h1>Perfil</h1>
		<?php
	
		if(isset($_GET['bv'])){
			echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['bv']."</p>";
		};

		?>
		<section>
		<button><a href="cadastrar.php">cadastrar novo item</a></button>
		<button><a href='apagar.php'>Desconectar</a></button>		
		</section>

		<section>
		<h2>Lista de itens cadastrados</h2>
		
			<?php

				if(isset($_GET['c'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['c']."</p>";
				
				}else if(isset($_GET['e'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['e']."</p>";
				}else if(isset($_GET['r'])){
					echo "<p id='text' style='text-align:center;background-color:aqua;'>".$_GET['r']."</p>";
				};

				include "conexao.php";

				$conn = conectar();

				$sql = "SELECT * FROM produto;";

				$result = $conn->query($sql);
				echo "<ul>";
				if($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						echo "<li>";
						echo "Nome: ".$row['nome'];
						echo "<br/>";
						echo "Descrição: ".$row['descricao'];
						echo "<br/>";
						echo "Valor: R$".$row['valor'];
						echo "<br/>";
						echo "Data de Validade: ".$row['data_de_validade'];
						echo "<br/>";
						echo "<a href='editar.php?codigo=".$row['codigo']."'>Editar</a><a href='remover.php?codigo=".$row['codigo']."'>Remover</a>";
						echo "</li>";
					};
				}else{
					echo "<li>Sem produtos cadastrados</li>";
				};
				echo "</ul>";
			?>
		
	</section>
	<script type="text/javascript" src="script.js"></script>
	<footer>
  <p>
    <h3>Contatos:</h3>
  </p>
  <h4 ><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:associacao.apprc@gmail.com">associacao.apprc@gmail.com</a> 
  <i class="fa-solid fa-phone"></i>Telefone: <a href="tel:+55994526166">(84)994526166</a>
</footer>
<footer>Todos os direitos reservados &copy Associação dos Pequenos Produtores Rurais</footer>

</body>
</html>

<?php
	}else{
		header('Location: index.php');
	};
?>