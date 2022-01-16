<?php
$E = '3245';
$E = strrev($E);
$N=[
    0=>'', 1=>'one','two','three','four','five','six','seven','eight','nine'
    
];

$teen = [10=>'ten','eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
        ];

$ty = [
      0=>'', 2=>'twenty', 'thirty', 'fourty', 'fifty', 'sixty',  'seventy', 'eighty', 'ninety'
];

$t = $E[1].$E[0];
$a = $t+0;
//var_dump($t);
//var_dump($a);
if($a<10){$R=$N[$a];} elseif($a >=10&$a<20){$R=$teen[$a];}elseif ($a>=20){$R=$ty[$t[0]]." ".$N[$t[1]];}

echo $N[$E[3]] ." thousand ". $N[$E[2]] ." hundred ".$R;

?>