<?php
/**
 *  * Auto-generated code below aims at helping you parse
 *   * the standard input according to the problem statement.
 *    **/

$message = stream_get_line(STDIN, 100 + 1, "\n");

$words = explode(" ", $message);

$toReturn = "";
$index = -1;
foreach($words as $word)
{
	    if(strlen($word) % 2 == 0)
		        {
				        $index = intval(strlen($word) /2)-1;
					    }
	        else
			    {
				            $index = intval(strlen($word) /2);
					        }
	        $toReturn .= $word[$index];
}

echo $toReturn;
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
//
// //echo("messageOUT (length <= 100)\n");
// ?>
