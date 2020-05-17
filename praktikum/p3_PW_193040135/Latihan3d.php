<html>
    <head>
        <meta charset="UTF-8">
        <title>Latihan 3D</title>
    </head>
    <body>
<?php
$a = 1;
$b = 2;
$c = 3;
$d = 4;

$hasil = ($a * $d) - ($b * $c);

function hitungDeterminan($a, $b, $c, $d)
{
echo "<table style='border-left : 2px solid black; border-right:2px solid black;' cellpadding = '5' cellspacing = '5'>
<tr>
  <td>$a</td>
    <td>$b</td>
</tr>
<tr>
 <td>$c</td>
<td>$d</td>
   </tr>
</table>"; 
echo "<br><b>Determinan dari matriks tersebut adalah "  .  $GLOBALS["hasil"]  . "</b>";
}
?>
    <?php
hitungDeterminan($a, $b, $c, $d); 
    ?>
    </body>
</html>