<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Numbers</title>
</head>
<body>
    <h1>Is number positive, negative, or zero??</h1>
    <form method="post">
        Enter a number: <input type="text" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if (!is_numeric($number)) {
            echo "The input is not a numeric value.";
        }
        else {
            if ($number > 0) {
                echo "<p style='color: lightblue; font-size: 24px;'>$number is a positive number.</p>";
            } elseif ($number < 0) {
                echo "<p style='color: lightgreen; font-size: 24px;'>$number is a negative number.</p>";
            } else {
                echo "<p style='color: black; font-size: 24px;'>The number is zero.</p>";
            }
        }
    }
    ?>
</body>
</html>
