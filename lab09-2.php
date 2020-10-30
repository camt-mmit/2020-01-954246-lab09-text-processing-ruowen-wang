<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
    $fp = fopen($_SERVER['argv'][2], 'r');
    fscanf($fp, "%d", $n);
    $pros = [];
    for($i = 0; $i < $n; $i++) {
        $pro = [];
        fscanf($fp, "%s", $pro);
        $pros[] = $pro;
    }
    fclose($fp);
    $m=substr($_SERVER['argv'][1], -1);  
    $s=substr($_SERVER['argv'][1], 0, -1);
    $co=[];
        for($j=0;$j<$n;$j++){
            $co[$j]=$m;
            $m++;
    printf("%s%d  %s\n",$s,$co[$j],$pros[$j]);
        }
    