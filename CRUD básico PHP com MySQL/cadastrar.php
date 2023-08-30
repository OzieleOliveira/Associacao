<?php 
    session_start();
    if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" type="image/png" href="icon3.png">
    <link rel="stylesheet"  media="'screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <a href="index.php">
        <figure>
        <img id="icon"src ="icon4.png" title="logo"><figcaption></figcaption>
        </figure>
    </a>

    <h1>Cadastrar</h1>
    <button><a href='perfil.php'>Perfil</a></button>
    <form action="Cadastrar_bd.php" method="post">

    <p>
        <label for="nome" >Nome do Produto:</label>
        <input type="text" name="nome" id="nome" required>
    </p>

    <p>
        <label for="descricao" >Descrição</label>
        <input type="text" name="descricao" id="descricao" required>
    </p>

    <p>
        <label for="data" >Data de Validade</label>
        <input type="date" name="data" id="data" required>
    </p>

    <p>
        <label for="valor" >Valor</label>
        <input type="number" name="valor" id="valor" step="0.010" required>
    </p>
    <p><input type="submit" value="cadastrar"></p>

    </form>
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