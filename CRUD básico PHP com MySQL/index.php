<html>
  <head>
    <title>Associação</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="icon" type="image/png" href="icon3.png">
    <link rel="stylesheet"  media="'screen" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/solid.min.css" integrity="sha512-6mc0R607di/biCutMUtU9K7NtNewiGQzrvWX4bWTeqmljZdJrwYvKJtnhgR+Ryvj+NRJ8+NnnCM/biGqMe/iRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body background="">
    <div>
    <div>
    <a href="index.php">
      <figure>
      <img id="icon"src ="icon4.png" title="Pagina inicial"><figcaption></figcaption>
      </figure>
    </a>
    </div>
    <div>
    <h1>Associação dos Pequenos Produtores Rurais</h1>
    </div>
 </div>
    
    
    
    

    <?php
      session_start();
      if(isset($_SESSION['nome']) and isset($_SESSION['senha'])){
        echo "<button><a href='perfil.php'>Perfil</a></button>";
        echo "<button><a href='apagar.php'>Desconectar</a></button>";        
      }else {
        echo "<a href='login.php' title='Clique para fazer login'><button id='login'>Login</button></a>";
      };

      include "conexao.php";

      $conn = conectar();

      $sql = "SELECT * FROM produto;";

      $result = $conn->query($sql);

      if($result->num_rows > 0){
        echo "<h2>Produtos</h2>";
        echo "<ul>";
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
          echo "</li>";
        };
        echo "</ul>";
      }else{
        echo "<li>Sem produtos no momento</li>";
      };

    ?>
      	<footer>
  <p>
    <h3>Contatos:</h3>
  </p>
  <h4 ><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:associacao.apprc@gmail.com">associacao.apprc@gmail.com</a> 
  <i class="fa-solid fa-phone"></i>Telefone: <a href="tel:+55994526166">(84)994526166</a>
  </h4>
</footer>
<footer>Todos os direitos reservados &copy Associação dos Pequenos Produtores Rurais</footer>
  </body>
</html>