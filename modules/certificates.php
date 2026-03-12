<?php

declare(strict_types=1);

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStar | Certificates</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="content panel">
        <h1>Certificates Module</h1>
        <p>This is a starter page for the certificates module.</p>
        <a class="button-link" href="../dashboard.php">Back to Dashboard</a>
    </main>
</body>
</html>
