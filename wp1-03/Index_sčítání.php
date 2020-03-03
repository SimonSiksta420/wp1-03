<?php
$a = 20;
$b = 0;

$summary = $a + $b;
$difference = $a - $b;
$product = $a * $b;

if ($b != 0) {
    $portion = $a / $b;
}
else {
    $portion = "nelze dělit nulou";
}

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
<?= $value1; ?> + <?= $value2; ?> = <?= $summary; ?>
<h3> Rozdíl </h3>
<?= $value1; ?> - <?= $value2; ?> = <?= $difference; ?>
<h3> Součin </h3>
<?= $value1; ?> * <?= $value2; ?> = <?= $product; ?>
<h3> Podíl </h3>
<?= $value1; ?> / <?= $value2; ?> = <?= $difference; ?>
</body>
</html>