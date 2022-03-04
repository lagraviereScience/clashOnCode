<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$S = stream_get_line(STDIN, 9 + 1, "\n");
$S = str_split($S);

echo "(" . $S[0] . $S[1] . $S[2] . ")". " " . $S[3] . $S[4] . $S[5] . "-" . $S[6] . $S[7] . $S[8] . $S[9];
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

//echo("answer\n");
?>