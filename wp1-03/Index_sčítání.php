<?php
$value1 = 10;
$value2 = 5;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Počítání v PHP </h1>
<p> Proměnná A </p> <?= $value1; ?>
<p> Proměnná B </p> <?= $value2; ?>
<h3> Součet </h3>
<?= $value1; ?> + <?= $value2; ?> = <?= $value1 + $value2; ?>
<h3> Rozdíl </h3>
<?= $value1; ?> - <?= $value2; ?> = <?= $value1 - $value2; ?>
<h3> Součin </h3>
<?= $value1; ?> * <?= $value2; ?> = <?= $value1 * $value2; ?>
<h3> Podíl </h3>
<?= $value1; ?> / <?= $value2; ?> = <?= $value1 / $value2; ?>
</body>
</html>