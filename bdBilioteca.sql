
CREATE DATABASE bdBiblioteca;

USE bdBiblioteca;

CREATE TABLE pedidos_emprestimos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomecliente VARCHAR(255),
    livro VARCHAR(255),
    dataemprestimo DATE
);
