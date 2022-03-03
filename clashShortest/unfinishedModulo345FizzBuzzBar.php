<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $n);
//echo $n;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
//$n%5==0&&$n%

for($i=1;$i<$n;$i++)
{
    $r="";
    if($i%3==0)
        $r.="Fizz";

    if($i%5==0)
        $r.="Buzz";

    if($i%4==0)
        $r.="Bar";

    if(strlen($r)<1)
        $r=$i;
    echo $r."\n";
}

?>
