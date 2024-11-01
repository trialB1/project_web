<?php
include 'db.php';
$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM currencies WHERE id = ?");
$query->execute([$id]);
$currency = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Currency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit Currency</h2>
        <form action="edit_currency_process.php?id=<?= $id ?>" method="post">
            <div class="mb-3">
                <label for="currency_code" class="form-label">Currency Code</label>
                <input type="text" class="form-control" id="currency_code" name="currency_code" value="<?= $currency['currency_code'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="currency_name" class="form-label">Currency Name</label>
                <input type="text" class="form-control" id="currency_name" name="currency_name" value="<?= $currency['currency_name'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="exchange_rate" class="form-label">Exchange Rate</label>
                <input type="number" step="0.0001" class="form-control" id="exchange_rate" name="exchange_rate" value="<?= $currency['exchange_rate'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Currency</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
