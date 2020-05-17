<!DOCTYPE html>
<head>
    <title></title>
    
    <style>
    .border {
        border: 1px solid black;
        width: 300px;
        height: 300px;
    }
    .kotak {
    border : 1px solid black;
    width : 50px;
    height : 50px;
    background-color : salmon;
    text-align :center;
    line-height : 50px;
    float : left;
    margin-top : 5px;
    margin-left: 3px;
    margin-bottom: -25px;
    border-radius : 50%; 
    }

    .clear {
        clear : both;
            }
    </style>
</head>
<body> 
    <div class="border">
<?php 

function tumpukanBola($tumpukan){
    for ($z = 1; $z <= $tumpukan; $z++){
        for ($x = 1; $x <= $z; $x++){
            echo '<div class="kotak">'.$z.'</div>';
        
        }
        echo '<div class="clear"></div>';
        echo "<br>";
    }
}
    tumpukanBola(5);
 
    ?>

    </div>
</body>
</html>