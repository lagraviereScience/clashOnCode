<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $count);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $count; $i++)
{
    $n = intval($inputs[$i]);
    if($n%2==0)
        echo("[ ] $n\n");
    else
        echo("[x] $n\n");
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

//echo("[x] n\n");
?>