<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $M);
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $E = intval($inputs[$i]);
}

$sum = 0;
foreach($inputs as $value)
{
    $sum += $value % $M;
}
echo $sum;
?>