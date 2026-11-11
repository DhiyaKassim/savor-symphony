<?php
// Each content page sets its own title before loading this shared header.
if (!isset($pageTitle)) {
    $pageTitle = 'Savor Symphony';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Savor Symphony</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-header">
    <a class="brand" href="index.php">Savor Symphony<span>A LITTLE TASTE OF HOME</span></a>
    <nav aria-label="Main navigation">
        <a href="index.php">Home</a>
        <a href="menu.php">Our Menu</a>
        <a href="#contact">Contact</a>
    </nav>
</header>
