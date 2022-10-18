<?php

$username = $_POST["username"];
$password = $_POST["password1, password2"];
$password = $_POST[]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>

<body>

<form method="post">
    <fieldset>
        <legend>Personal Details</legend>
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1">
        </div>
        <div>
            <label for="password2">Re-enter password:</label>
            <input type="password" id="password2" name="password2">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </fieldset>
</form>

</body>
</html>