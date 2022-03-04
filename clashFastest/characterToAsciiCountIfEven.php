<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
declare(encoding='UTF-8');
$m = stream_get_line(STDIN, 100 + 1, "\n");
$m = str_replace(" ", "", $m);
$a = str_split($m);

//var_dump($a);
$count = 0;
foreach($a as $s)
{
    if(ord($s)%2==0)
    {
        $count++;
    }
}
echo $count;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)


//echo("answer\n");
?>