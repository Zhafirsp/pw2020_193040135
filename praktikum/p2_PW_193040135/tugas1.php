<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhafir</title>
    <style>
        }
        .kotak {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            background-color: skyblue;
        }
        .kotak1 {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            background-color: salmon;
        }
    </style>
</head>
<body>

<table>
<?php
for($i = 1; $i <= 6; $i++){
    echo'<tr>';
    for($j = 1; $j <= 6; $j++)
    {
        if(($i % 2 == 1 || $j % 2 == 1) && ($j % 2 == 0 || $i % 2 == 0)) 
        {
        echo "<td><div class='kotak1'></div></td>";
        }
        else {
            echo "<td><div class='kotak'></div></td>";
        }
    }
    echo'</tr>';
}

?>
</table>
</body>
</html>