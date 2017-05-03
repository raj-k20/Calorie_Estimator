<?php
$a="Hi [0x7FFE344230A0]";
$k=split("[0x7FFE344230A0]", $a);
print_r($k);
$correct=$k[0];
echo $correct;
$a=strlen($correct);
$k=substr($correct,0,$a-1);
echo "Finally";
echo $k;

$date = date('m/d/Y', time());
print($date);
?>