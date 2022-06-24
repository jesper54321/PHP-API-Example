<?php
$strPageTitle = (!isset($strPageTitle)) ? "Velkommen til min PHP side" : $strPageTitle
?>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>TechCollege | <?php echo $strPageTitle ?></title>
</head>

<body>
    <header>
        <h1><?php echo $strPageTitle ?></h1>
        <?php require_once DOCROOT . "/assets/incl/nav.php"; ?>
    </header>
    <main>