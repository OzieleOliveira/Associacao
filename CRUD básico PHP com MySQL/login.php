<html>
  <head>
    <title>Autenticar Usuário</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" type="image/png" href="icon3.png">
    <link rel="stylesheet"  media="'screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <a href="index.php"><img id="icon"src ="icon4.png" title="logo"></a>
    <h1>Login</h1> 

    <form action="autenticar.php" method="POST">
        <?php
          if (isset($_GET["autenticar"])) {
            echo "<strong style='color:red;'>" .$_GET["autenticar"]. "</strong>";
          };
        ?>
        <p> <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" /></p>
        
            
        
        <p> <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" /></p>
            
        <input type="submit" value="Autenticar" name="autenticar" >       
       
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