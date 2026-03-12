<?php
$courses = [
    'Business Analytics',
    'Data Science',
    'Artificial Intelligence',
    'Big Data',
    'Machine Learning',
    'Robotics',
    'Financial Intelligence',
    'Information Technology',
    'Deep Learning',
    'Generative Artificial Intelligence',
    'Entrepreneurship',
    'Innovation',
    'FullStack Development',
    'Startups',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStar | Programs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="site-nav">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="programs.php">Programs</a>
        <a href="index.php">Portal</a>
        <a href="contact.php">Contact</a>
    </nav>
    <main class="content panel">
        <h1>Programs</h1>
        <ul class="course-list">
            <?php foreach ($courses as $course): ?>
                <li><?php echo htmlspecialchars($course, ENT_QUOTES, 'UTF-8'); ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
