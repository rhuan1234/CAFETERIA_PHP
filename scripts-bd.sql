create table produtos(
id int not null auto_increment,
tipo varchar(45) not null,
nome varchar(45) not null,
descricao varchar(90) not null,
imagem varchar(80) not null,
preco decimal(5, 2) not null,
primary key (id)
);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Bebida', 'Café Cremoso', 
'Café cremoso irresistivelmente suave e que envolve seu paladar', 
'img/cafe-cremoso.jpg', 
5.00);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Bebida', 'Café com Leite', 
'A harmonia perfeita do café e do leite, uma experiência reconfortante', 
'img/cafe-com-leite.jpg', 
2.00);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Bebida', 'Cappuccino', 
'Café suave, leite cremoso e uma pitada de sabor adocicado', 
'img/cappuccino.jpg', 
7.00);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Bebida', 'Café Gelado', 
'Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.', 
'img/cafe-gelado.jpg', 
3.00);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Prato', 'Bife',
'Bife, arroz com feijão e uma deliciosa batata frita',
'img/bife.jpg',
27.90);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Prato', 'Filé de peixe',
'Filé de peixe salmão assado, arroz, feijão verde e tomate.',
'img/prato-peixe.jpg',
24.99);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Prato', 'Frango',
'Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante',
'img/prato-frango.jpg',
23.00);

INSERT INTO produtos (tipo, nome, descricao, imagem, preco)
VALUES ('Prato', 'Fettuccine',
'Prato italiano autêntico da massa do fettuccine com peito de frango grelhado',
'img/fettuccine.jpg',
22.50);