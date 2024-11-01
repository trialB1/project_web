<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Currency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Add New Currency</h2>
        <form action="add_currency_process.php" method="post">
            <div class="mb-3">
                <label for="currency_code" class="form-label">Currency Code</label>
                <input type="text" class="form-control" id="currency_code" name="currency_code" required>
            </div>
            <div class="mb-3">
                <label for="currency_name" class="form-label">Currency Name</label>
                <input type="text" class="form-control" id="currency_name" name="currency_name" required>
            </div>
            <div class="mb-3">
                <label for="exchange_rate" class="form-label">Exchange Rate</label>
                <input type="number" step="0.0001" class="form-control" id="exchange_rate" name="exchange_rate" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Currency</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
