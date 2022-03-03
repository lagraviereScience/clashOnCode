<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$numbers = stream_get_line(STDIN, 100 + 1, "\n");

echo intval(max(explode(" ", $numbers)) / min(explode(" ", $numbers)));
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

//echo("answer\n");
?>
