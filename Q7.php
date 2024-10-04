<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area Bermuda</title>
</head>
<body>
    <h2>Calculate Area of a Rectangle ⬛</h2>
    <form method="post">
        Length: <input type="number" name="length" step="any" required><br><br>
        Width: <input type="number" name="width" step="any" required><br><br>
        <input type="submit" value="Calculate Area ✍🏻">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST['length'];
        $width = $_POST['width'];

        function calculateArea($length, $width) {
            return $length * $width;
        }

        $area = calculateArea($length, $width);
        echo "<br><p style='color: lightblue; font-size: 24px;'>The area of the rectangle is: $area</p>";
    }
    ?>
</body>
</html>
