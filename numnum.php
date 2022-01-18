<?php
$S = '6532';
$E = strrev($S);
$E = str_pad($E, 4, "0");
//echo $E;

$N = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
$teen = [10=>'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
$ty = ['', 2=>'twenty', 'thirty', 'fourty', 'fifty', 'sixty',  'seventy', 'eighty', 'ninety'];

$t = $E[1].$E[0];
$a = $t+0;
//var_dump($t);
//var_dump($a);

switch($a) {
    case ($a<10):
    $R = $N[$a];
    break;
    case ($a >= 10 && $a<20):
    $R = $teen[$a];
    break;
    case ($a >= 20):
    $R = $ty[$t[0]]." ".$N[$t[1]];
    break;
}

if ($N[$E[3]]) {
    $tho = " thousand ";
} else {
    $tho = '';
}
if ($N[$E[2]]) {
    $thu = " hundred ";
} else {
    $thu = '';
}
//echo preg_replace();
echo $N[$E[3]] .$tho. $N[$E[2]] .$thu.$R;

?>
