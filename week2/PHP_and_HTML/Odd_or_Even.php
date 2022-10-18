<?php

$number = rand(1, 20);
$parity = "even";

if ($number & 1) {
    $parity = "odd";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic PHP Output</title>
</head>
<body>

<h1>Odd or even</h1>

<p>
    <?= "{$number} is {$parity}"; ?>
</p>

</body>
</html>