<?php
/**
 * The while loop represents the game.
 * Each iteration represents a turn of the game
 * where you are given inputs (the heights of the mountains)
 * and where you have to print an output (the index of the mountain to fire on)
 * The inputs you are given are automatically updated according to your last actions.
 **/

$highestId = -1;
$max = -1;
while (TRUE)
{
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d", $mountainH);
        if($max < $mountainH)
        {
            $highestId = $i;
            $max = $mountainH;
        }
    }
    echo $highestId . "\n";
    $highestId = -1;
    $max = -1;
}
?>