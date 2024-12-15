<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chic&Casual</title>
    <link rel="stylesheet" href="server.css">
</head>
<body>
   <header>
    <h1>Chic&Casual</h1>
    <h2>Dados Cadastrados</h2>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="server.php">Dados Cadastrados</a>
        <a href="desenvolvedores.html">Desenvolvedores</a>
    </nav>
   </header>

   <main>
       <h3>Dados Recebidos</h3>
       <?php 
           if (!empty($_POST)) {
               echo '<pre>';
               print_r($_POST);
               echo '</pre>';
           } else {
               echo '<p>Nenhum dado foi enviado.</p>';
           }
       ?>
   </main>
   <footer>
        <p>  Campus Santa Cruz-RN |
             Trabalho de Autoria Web |
             Prof. Marcelo Figueiredo Barbosa Júnior |
              Mykaely Raissa Costa da Silva |
               Kevily Mariana Santos de Araújo |
               Diego Da Silva Campelo |
            ref:https://www.canva.com/design/DAGYEz46jxE/gaDH3SB6svg7IWcc5gbapA/edit , https://www.canva.com/design/DAGYE8cErN4/SZjatAxUnO6zyBqgV1t9TA/edit</p>
    </footer>
</body>
</html>
