<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication table</title>
</head>

<body>
    <?php
    $number = $_POST['number'];

    if (empty($number)) {
        echo '<table><br>';
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 10; $j++) {
                $mult = $i * $j;
                echo "<td>$mult</td> \n";
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if ($number < 1 && !empty($number)) {
        print("<script type=\"text/javascript\">alert('Input cannot be < 1.')</script>");
    } else {
        echo '<table><br>';
        for ($i = 1; $i <= $number; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $number; $j++) {
                $mult = $i * $j;
                echo "<td>$mult</td> \n";
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
    <a href="./index.html">Back</a>
</body>

</html>