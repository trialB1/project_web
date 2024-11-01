<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currency_code = $_POST['currency_code'];
    $currency_name = $_POST['currency_name'];
    $exchange_rate = $_POST['exchange_rate'];

    $stmt = $pdo->prepare("INSERT INTO currencies (currency_code, currency_name, exchange_rate) VALUES (?, ?, ?)");
    $stmt->execute([$currency_code, $currency_name, $exchange_rate]);

    header("Location: index.php");
    exit;
}
?>
