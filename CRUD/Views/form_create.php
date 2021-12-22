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
      padding: 5px;
    }
    label, textarea{
      display: block;
      margin-bottom: 5px;
    }
    button{
      margin-top: 5px;
      padding: 10px 25px;
      cursor: pointer;
    }
    .info{
      color: #555;
      display: block;
      padding-bottom: 10px;
      font-size: 12px;
    }
  </style>
  <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>

    <p class="info">* O preenchimento de todos os campos é obrigatório</p>

    <form action="../Controller/Create.php" method="post">
        <label for="name">Nome do produto:</label>
        <input type="text" name="name" id="name" size="60">
        <label for="description">Descrição do produto:</label>
        <textarea name="description" id="description" rows="10" cols="61"></textarea>
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>


