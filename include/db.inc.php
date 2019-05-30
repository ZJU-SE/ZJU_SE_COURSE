<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/17
 * Time: 19:26
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db_zjuse', 'zjuse', 'zjuse');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}
