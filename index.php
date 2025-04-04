<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT') ?: '5432'; // padrão

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Conexão com Supabase: OK! 🔐</h1>";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
