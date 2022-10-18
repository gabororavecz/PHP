<?php

$first_name = $_POST["first_name"];
$surname = $_POST["surname"];
$age = $_POST["age"];

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
            <label for="first_name">First name:</label>
            <input type="text" id="first_name" name="first_name">
        </div>
        <div>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </fieldset>

    
</form>

<?php echo $first_name . $surname . " " . $age; ?>

</body>
</html>