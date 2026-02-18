<?php
require "src/connection-bd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$dadosProdutos = $produtoRepositorio->buscarTodos();
?>
<!doctype html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<main>

  <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
         <?php foreach($dadosProdutos as $produto):?>
      <tr>
        <td><?= $produto->getNome() ?></td>
        <td><?= $produto->getTipo() ?></td>
        <td><?= $produto->getDescricao() ?></td>
        <td>R$ <?= number_format($produto->getPreco(), 2, ',', '.') ?></td>   
      </tr>
      <?php endforeach;?>

    
      </tbody>
    </table>
  </section>
</main>
</body>
</html>