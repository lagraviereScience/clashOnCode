<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d", $size);
$spaces="";
$stars="*";
for($i=0;$i<$size;$i++)
{
    echo $spaces . $stars . "\n";
    $spaces .= " ";
    $stars .= "*";
    //echo "\n";
}
?>