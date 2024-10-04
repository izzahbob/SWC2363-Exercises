<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <label for="num1">First Number:</label>
        <input type="number" name="num1" id="num1" step="any" required><br><br>

        <label for="num2">Second Number:</label>
        <input type="number" name="num2" id="num2" step="any" required><br><br>

        <label for="operation">Choose Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = '';

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<h3 style='color: lightgreen; font-size: 24px;'>Result: $num1 + $num2 = $result</h3>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<h3 style='color: lightgreen; font-size: 24px;'>Result: $num1 - $num2 = $result</h3>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<h3 style='color: lightgreen; font-size: 24px;'>Result: $num1 * $num2 = $result</h3>";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<h3 style='color: lightgreen; font-size: 24px;'>Result: $num1 / $num2 = $result</h3>";
                } else {
                    echo "<h3 style='color: red; font-size: 24px;'>Error: Division by zero is not allowed.</h3>";
                }
                break;
            default:
                echo "<h3 style='color: red; font-size: 24px;'>Error: Invalid operation.</h3>";
        }
    }
    ?>
</body>
</html>
