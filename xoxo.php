<?php
$xo = [
['O','O','Z'],
['X','X','X'],
['Z','X','O'],

];

foreach ($xo as $i => $str) {
        $hor ='';
        $vert ='';
    
    foreach ($str as $j => $v) {
        $hor .=$xo[$i][$j];
        $vert .=$xo[$j][$i];
    
}
    if ($hor==='XXX'or $vert==='XXX'){echo 'X win';break;} elseif($hor==='OOO'or $vert==='OOO'){echo 'O win';break;}
    }

?>