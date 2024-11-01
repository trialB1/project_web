<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-gray-100">
    <div class="container my-5">
        <h2 class="text-center text-3xl font-bold">Login</h2>
        <form action="login_process.php" method="post" class="bg-white p-5 rounded shadow mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="text-center mt-3">
                <small>Don't have an account? <a href="register.php">Register here</a>.</small>
            </div>
        </form>
    </div>
</body>
</html>
