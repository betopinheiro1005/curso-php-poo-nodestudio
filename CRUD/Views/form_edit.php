<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
      font-family: Verdana;
    }
    input[type="text"]{
      display: block;
      margin-bottom: 5px;
    }
    label, textarea{
      display: block;
      margin-bottom: 5px;
    }
    button{
      margin-top: 5px;
    }
    .info{
      color: #555;
      display: block;
      padding-bottom: 10px;
      font-size: 12px;
    }
  </style>
  <title>Formulário de edição</title>
</head>
<body>

    <?php
      $id = $_GET['id'];
      $name = $_GET['name'];
      $description = $_GET['description'];
    ?>

    <h1>Editar Produtos</h1>

    <p class="info">* O preenchimento de todos os campos é obrigatório</p>

    <form action="../Controller/Update.php" method="post">
        <input type="hidden" size="3" name="id" id="id" value="<?php echo $id; ?>">

        <label for="name">Nome do produto:</label>
        <input type="text" size="60" name="name" id="name" value="<?php echo $name; ?>">

        <label for="description">Descrição do produto:</label>
        <textarea name="description" id="description" rows="10" cols=60><?php echo $description; ?></textarea>
        <button type="submit">Atualizar</button>
    </form>

</body>
</html>