<?php
/**
 *  * Auto-generated code below aims at helping you parse
 *   * the standard input according to the problem statement.
 *    **/

$s = stream_get_line(STDIN, 1000 + 1, "\n");

for( $i=0;$i<strlen($s);$i++)
{
	    echo $s[$i] . $s[strlen($s)-1-$i];
}
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
//
?>
