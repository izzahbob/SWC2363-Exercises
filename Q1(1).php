<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Age</title>
</head>
<body>
    <h1>Can You Vote?</h1>
    <form method="post">
        <label for="age">Age :</label>
        <input type="number" name="age" id="age" step="any" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "<p style='color: pink; font-size: 24px;'>Congratulations! You can vote!</p>";
        } else {
            echo "<p style='color: blue; font-size: 24px;'>Apologies, you are not old enough to vote :(</p>";
        }
    }
    ?>
        
</body>
</html>
