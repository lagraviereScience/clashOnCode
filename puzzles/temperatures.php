<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
function getClosest($search, $arr) {
    $closest = null;
    foreach ($arr as $item) {
       if ($closest === null || abs($search - $closest) > abs($item - $search)) {
          $closest = $item;
       }
    }
    return $closest;
 }

fscanf(STDIN, "%d", $n);

$mystring = fgets(STDIN);
if($mystring == "
")
{
    echo 0;
}
else
{

$inputs = explode(" ", $mystring);


$allNegative = true;
for ($i = 0; $i < $n; $i++)
{
    $inputs[$i] = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
    if($inputs[$i]>0)
        $allNegative = false;
}

if(getClosest(0, $inputs)<0 AND !$allNegative)
{
    echo getClosest(0, $inputs)*-1;
}
else
{
    echo getClosest(0, $inputs);
}
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("\n");
}
?>