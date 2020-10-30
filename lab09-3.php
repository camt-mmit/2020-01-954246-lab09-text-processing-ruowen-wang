<?php 
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$str=fopen($_SERVER['argv'][2], 'r');
for($i=0;;$i++){
$s[$i]=trim(fgets($str));
$ss[$i]=(strtolower($s[$i]));
$caw[$i]= ucwords($s[$i]);
if(feof($str))break;
}
fclose($str);

$f=[];
$fie = fopen($_SERVER['argv'][1], 'r');
do{
    $f[]= trim(fgets($fie)); 
}while(!feof($fie));
$ff=implode("",$f);
$r1=str_replace('Chiang','chiang',$ff);
$result=str_replace($ss,$caw,$r1);
echo $result;
