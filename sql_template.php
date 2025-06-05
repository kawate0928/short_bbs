<?php
    //sql接続するための情報を変数に挿入
    $host = 'localhost';
    $dbname = 'bbs';          
    $user = 'root';          
    $pass = 'root';   

//try_catch文の中にSQLに接続するコードを書いてる、覚える必要はないためコピペで良い
try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
 
        $pdo = new PDO($dsn, $user, $pass);
 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        echo "接続成功<br>";
    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage();
    }
?>