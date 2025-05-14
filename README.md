# feedback_system

Servidor Xampp ligado (Apache e SQL)
Ter o PHP
Extensão PDO habilitada (para MySQL)
Para criação do banco de dados e persistência dos feedbacks
Gerenciador de dependências do PHP para autoload (composer install)

CREATE DATABASE feedback_db;

USE feedback_db;

CREATE TABLE feedbacks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo TEXT NOT NULL,
  descricao TEXT NOT NULL,
  tipo ENUM('bug', 'sugestão', 'reclamação', 'feedback') NOT NULL,
  status ENUM('recebido', 'em análise', 'em desenvolvimento', 'finalizado') DEFAULT 'recebido'
);

$this->pdo = new PDO('mysql:host=localhost;dbname=feedback_db', 'seu_usuario', 'sua_senha');

Usuário: admin

Senha: 123456
