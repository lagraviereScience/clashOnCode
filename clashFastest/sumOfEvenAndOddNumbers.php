<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
$sum_odd=0;
$sum_even=0;
for($i=0;$i<$n+1;$i++)
{
    $i%2==0?$sum_even+=$i:$sum_odd+=$i;
}
//var_dump($sum_odd);
echo("$sum_odd\n");
echo("$sum_even\n");
?>