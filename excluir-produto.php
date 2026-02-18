<?php
require "src/connection-bd.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletarProduto($_POST['id']);

header("location: admin.php");

