<?php
$number1 = isset($_POST['n1']) ? $_POST['n1'] : null;
$number2 = isset($_POST['n2']) ? $_POST['n2'] : null;

if ($number1 !== null && $number2 !== null) {
    echo "The Sum of $number1 and $number2 is: " . ($number1 + $number2) . "<br>";
    echo "The Difference of $number1 and $number2 is: " . ($number1 - $number2) . "<br>";
    echo "The Product of $number1 and $number2 is: " . ($number1 * $number2) . "<br>";
    echo "The Quotient of $number1 and $number2 is: " . ($number2 != 0 ? ($number1 / $number2) : "Cannot divide by zero") . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="n1">Enter First Number:</label>
            <input type="number" name="n1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="n2">Enter Second Number:</label>
            <input type="number" name="n2" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
