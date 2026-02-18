<?php

class Produto {
    private ?int $id;
    private string $nome;
    private string $tipo;
    private string $descricao;
    private float $preco;
    private string $imagem;

    public function __construct(?int $id, string $nome, string $tipo, string $descricao, float $preco, string $imagem = "../img/logo-serenatto.png") {
        $this->id = $id;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function getId() {
        return $this->id;
    }
        public function getTipo() {
            return $this->tipo;
        }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getPrecoFormatado(): string{
        return "R$ ". number_format($this->getPreco(), 2, ',', '.');
    }

    public function setImagem(string $imagem): void{
        $this->imagem = $imagem;
    }
}   