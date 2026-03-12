<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    // Starter login only; replace with database authentication in production.
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['user'] = [
            'name' => 'TechStar Admin',
            'role' => 'Administrator',
        ];

        header('Location: dashboard.php');
        exit;
    }

    $error = 'Invalid credentials. Use admin / admin123 for starter access.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStar Portal Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-page">
    <main class="login-card">
        <h1>TechStar Institute of Business Technology</h1>
        <p>School Management Portal</p>

        <?php if ($error !== ''): ?>
            <div class="alert"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <form method="POST" action="index.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <small>Starter credentials: <strong>admin</strong> / <strong>admin123</strong></small>
        <div class="site-links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="programs.php">Programs</a>
            <a href="contact.php">Contact</a>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
