<?php

declare(strict_types=1);

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
$modules = [
    ['file' => 'users.php', 'label' => 'User Management'],
    ['file' => 'courses.php', 'label' => 'Course Management'],
    ['file' => 'enrollments.php', 'label' => 'Student Enrollments'],
    ['file' => 'announcements.php', 'label' => 'Announcements'],
    ['file' => 'reports.php', 'label' => 'Reports & Analytics'],
    ['file' => 'certificates.php', 'label' => 'Certificate Generator'],
    ['file' => 'settings.php', 'label' => 'System Settings'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStar Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="top-bar">
        <h1>TechStar Admin Dashboard</h1>
        <div>
            <span><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?> (<?php echo htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8'); ?>)</span>
            <a class="button-link" href="logout.php">Logout</a>
        </div>
    </header>

    <main class="content">
        <section class="panel">
            <h2>Portal Modules</h2>
            <div class="module-grid">
                <?php foreach ($modules as $module): ?>
                    <a class="module-card" href="modules/<?php echo htmlspecialchars($module['file'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?php echo htmlspecialchars($module['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="panel">
            <h2>Dashboards Available</h2>
            <ul>
                <li>Admin Dashboard: Users, teachers, students, finance, attendance, exams, and reports.</li>
                <li>Teacher Dashboard: Materials, classes, attendance, grading, and exam creation.</li>
                <li>Student Dashboard: Courses, lessons, assignments, exams, and certificates.</li>
            </ul>
        </section>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
