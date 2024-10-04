<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sum Calculation</title>
</head>
<body>
    <h2>Sum Calculation Output 🖥️</h2>
    <?php
    // Define the sum function
    function sum(int $x, int $y) {
        return $x + $y;
    }

    // Display the required sums
    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";
    ?>
</body>
</html>
