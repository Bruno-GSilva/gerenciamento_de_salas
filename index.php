<?php
$host = 'aws-0-sa-east-1.pooler.supabase.com';
$db   = 'postgres';
$user = 'postgres.jtquvxqbkvnakjmpivlw';
$pass = '91Db113289*';
$port = '6543';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Conectado com sucesso ao Supabase 🎉</h1>";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
