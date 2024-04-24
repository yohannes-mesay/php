<?php
$colors = array('red', 'blue', 'green', 'yellow', 'orange', 'purple');
$randomColor = $colors[array_rand($colors)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Random Background Color</title>
    <style>
        body {
            background-color: <?php echo $randomColor; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to my page!</h1>
    <p>This page has a random background color.</p>
</body>
</html>