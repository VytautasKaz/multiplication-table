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

    if ($number < 1) {
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
    <button><a href="./index.html">Back</a></button>
</body>

</html>