<?php
$host = getenv('host');
$db   = getenv('dbname');
$user = getenv('user');
$pass = getenv('password');
$port = getenv('port');

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
