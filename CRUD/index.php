<?php
  require_once('vendor/autoload.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<style>
  *{
    font-family: Verdana;
  }
  input[type="text"]{
    display: block;
    margin-bottom: 5px;
  }
  button{
    padding: 2px 10px;
    cursor: pointer;
    margin: 5px;
  }
  a{
    text-decoration: none;
    cursor: pointer;
  }
  table,
  tr,
  td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;

  }
  theader tr td{
    text-align: center;
  }
</style>

<body>
  <a href="Views/form_create.php"><button><p>Cadastrar Produto</p></button></a>

  <?php
    $product = new \App\Model\ProductDao();
    $product->read();
  ?>

  <h1>Produtos Cadastrados</h1>

  <?php if ($product->read() == []) { ?>
      <h4>Nenhum produto cadastrado</h4>
  <?php } else { ?>
      <table>
        <tr>
          <td>Id</td>
          <td>Nome</td>
          <td>Descrição</td>
          <td style="text-align:center" colspan="2">Ação</td>
        </tr>
        <?php foreach ($product->read() as $item) { ?>
          <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['description']; ?></td>
            <td style="text-align:center"><a href="Views/form_edit.php?id=<?php echo $item['id']; ?>&name=<?php echo $item['name']; ?>&description=<?php echo $item['description']; ?>"><button>Editar</button></a>
            <a href="Controller/Delete.php?id=<?php echo $item['id']; ?>"><button>Excluir</button></a></td>
          </tr>
        <?php } ?>
    </table>

    <br />
    <?php } ?>

</body>

</html>