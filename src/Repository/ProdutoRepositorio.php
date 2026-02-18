<?php
class ProdutoRepositorio{
    private PDO $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function opcoesCafe():array{
        $sqlQuery = "SELECT * FROM produtos where tipo = 'Bebida' ORDER BY preco";
        $statement = $this->pdo->query($sqlQuery);
        $produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosCafe = array_map(function ($produto){
        return new Produto(
        $produto['id'],
        $produto['nome'],
        $produto['tipo'],
        $produto['descricao'],
        $produto['preco'],
        $produto['imagem']
    );
    }, $produtosCafe);
        return $dadosCafe;
    }

     public function opcoesAlmoco(): array
    {
        $sql2 = "SELECT * FROM produtos WHERE tipo = 'Prato' ORDER BY preco";
        $statement = $this->pdo->query($sql2);
        $produtosAlmoco = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosAlmoco = array_map(function ($almoco){
            return new Produto(
                $almoco['id'],
                $almoco['nome'],
                $almoco['tipo'],
                $almoco['descricao'],
                $almoco['preco'],
                $almoco['imagem']
            );
        },$produtosAlmoco);

        return  $dadosAlmoco;
    }

    public function buscarTodos(): array{
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $statement = $this->pdo->query($sql);
        $produtos = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dados = array_map(function($produto){
            return new Produto(
                $produto['id'],
                $produto['nome'],
                $produto['tipo'],
                $produto['descricao'],
                $produto['preco'],
                $produto['imagem']
                
            );
        }, $produtos);
        return $dados;
    }

    public function deletarProduto(int $id): void{
        $sql = "DELETE FROM produtos where id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();
    }

    public function salvar(Produto $produto): void{
        $sql = "INSERT INTO produtos (nome, tipo, descricao, preco, imagem) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->pdo->prepare(($sql));
        $statement->bindValue(1, $produto->getNome(), PDO::PARAM_STR);
        $statement->bindValue(2, $produto->getTipo(), PDO::PARAM_STR);
        $statement->bindValue(3, $produto->getDescricao(), PDO::PARAM_STR);
        $statement->bindValue(4, $produto->getPreco(), PDO::PARAM_STR);
        $statement->bindValue(5, $produto->getImagem(), PDO::PARAM_STR);
        $statement->execute();
    }

    public function buscar(int $id): ?Produto{
        $sql = "SELECT * FROM produtos WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id, PDO::PARAM_INT);
        $statement->execute();
        $produto = $statement->fetch(PDO::FETCH_ASSOC);
        if(!$produto){
            return null;
        }
        return new Produto(
            $produto['id'],
            $produto['nome'],
            $produto['tipo'],
            $produto['descricao'],
            $produto['preco'],
            $produto['imagem']
        );
    }

    public function atualizar(Produto $produto): void{
        $sql = "UPDATE produtos SET nome = ?, tipo = ?, descricao = ?, preco = ?, imagem = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $produto->getNome());
        $statement->bindValue(2, $produto->getTipo());
        $statement->bindValue(3, $produto->getDescricao());
        $statement->bindValue(4, $produto->getPreco());
        $statement->bindValue(5, $produto->getImagem());
        $statement->bindValue(6, $produto->getId());
        $statement->execute();
    }
}