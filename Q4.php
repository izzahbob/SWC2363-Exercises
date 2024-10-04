<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamonds la bh</title>
    <style>
        .star {
            color: purple;
        }
    </style>
</head>
<body>
    <h1>Half diamond in half</h1>
    
    <?php
    for ($i = 1; $i <= 8; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<span class='star'>*</span>";
        }
        echo "<br>";
    }
    ?>
    
    <h2>Done</h2>
        
</body>
</html>
