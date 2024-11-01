<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Currency Exchange</a>
            <div class="ml-auto">
                <span class="navbar-text">Welcome, <?= $_SESSION['username'] ?>!</span>
                <a href="logout.php" class="btn btn-danger ms-3">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center text-3xl font-bold mb-5">Currency Exchange Rates</h1>
        <a href="add_currency.php" class="btn btn-primary mb-3">Add New Currency</a>
        
        <table class="table table-bordered bg-white shadow rounded-lg">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Exchange Rate</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';
                $query = $pdo->query("SELECT * FROM currencies ORDER BY id DESC");
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['currency_code']}</td>
                        <td>{$row['currency_name']}</td>
                        <td>{$row['exchange_rate']}</td>
                        <td>{$row['last_updated']}</td>
                        <td>
                            <a href='edit_currency.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete_currency.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
