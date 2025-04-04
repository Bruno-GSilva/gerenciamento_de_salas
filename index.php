<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT') ?: '5432';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>✅ Conectado ao Supabase com sucesso!</h1>";
} catch (PDOException $e) {
    echo "<h1>❌ Erro na conexão</h1>";
    echo "<pre>" . $e->getMessage() . "</pre>";
}
?>
