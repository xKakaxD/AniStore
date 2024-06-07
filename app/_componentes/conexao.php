<?php
// Detalhes de conexão com o banco de dados
$host = 'localhost';
$dbname = 'anistore';
$username = 'root';
$password = '';

try {
    // Cria uma nova instância da classe PDO para a conexão com o banco de dados
    // A string DSN (Data Source Name) especifica o tipo de banco de dados (mysql), o endereço do servidor ($host) e o nome do banco de dados ($dbname)
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Define o modo de erro do PDO para exceção
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO::ATTR_ERRMODE define o modo de erro do PDO, e PDO::ERRMODE_EXCEPTION faz com que o PDO lance exceções quando ocorrer um erro
} catch (PDOException $e) {
    // Se ocorrer um erro, exibe a mensagem de erro
    echo "Erro na conexão: " . $e->getMessage(); // Se a conexão falhar, a exceção PDOException é capturada e a mensagem de erro é exibida
}
?>
