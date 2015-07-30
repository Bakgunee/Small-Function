<?php

function make_figure($num, $f){
$zero = '';
for($i=0;$i<(($f-count($f))-1);$i++){
    $zero .= '0';
}
$max = pow(10, $f)/10;

if($num < $max){
    $res = $zero.(int)$num;
}

return $res;
}

?>