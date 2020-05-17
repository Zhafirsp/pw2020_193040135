<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
</head>
<body>
    
    <style>
    .border  {
        border : 1px solid black;
        width: 200px;
        height: 180px;
        line-height: 10px;
    }
    .kotak {
        border: 1px solid black;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        border-radius: 100px;
        float: left;
        margin-left: 5px;
        margin-top: 5px;
        background-color: salmon;
    }

    .clear {
        clear: both;
    }
    </style>
    <div class="border">
<?php
for($z = 1; $z <= 3; $z++){
    for($x = 1; $x <= $z; $x++){
    if($z == 1) {$c ="1";}
    if($z == 2) {$c ="2";}
    if($z == 3) {$c ="3";}
  echo "<div class='kotak'>$c</div>";
}
  echo "<div class='clear'></div>";
}
?>
</div>
</body>
</html>