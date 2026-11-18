<?php
// includes/header.php – page top. Set $pageTitle before including this file.
// (In Activity 2 you will replace this file with one that shows menus by role.)
declare(strict_types=1);
$loggedIn = !empty($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle ?? 'WST2 Secure App') ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/style.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="<?= BASE_URL ?>/dashboard.php">WST2 Secure App</a>
    <?php if ($loggedIn): ?>
        <nav>
            <a href="<?= BASE_URL ?>/dashboard.php">Dashboard</a>
            <span class="who"><?= e($_SESSION['username'] ?? '') ?> (<?= e($_SESSION['role'] ?? '') ?>)</span>
            <a class="btn-small" href="<?= BASE_URL ?>/logout.php">Log out</a>
        </nav>
    <?php endif; ?>
</header>
<main class="container">
<?php if ($msg = flash()): ?>
    <div class="alert"><?= e($msg) ?></div>
<?php endif; ?>
