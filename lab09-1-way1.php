<?php
//professor,it's my firt time try. The result is ok, but code has something wrong, so I try another way 
//to code in "lab09-1-way2.php".
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
    $fp = fopen($_SERVER['argv'][1], 'r');
    fscanf($fp, "%s %s", $fir,$last);
    echo"Transaction for:\n";
    printf("     First name: %s\n",$fir);
    printf("      Last name: %s\n",$last);
    fscanf($fp, "%d", $n);
    printf("Number of transactions:%d\n",$n);
    $trans = [];
    for($i = 0; $i < $n; $i++) {
        $tran = [];
        fscanf($fp, "%s %s", $tran['first'], $tran['last']);
        $trans[] = $tran;
        
    }
    fclose($fp);
    $sum=array_reduce($trans, function($carry, $tran) {
        return $carry + $tran['last'];
    }, 0);
    $acc=$sum-2*$trans[2]['last']-2*$trans[3]['last']-2*$trans[4]['last']-$trans[5]['last']-$trans[6]['last']-$trans[9]['last'];
    $printStudent = function($tran) {
        printf("%10s:         %6.2f \n", $tran['first'], $tran['last']);
    };
    array_walk($trans, $printStudent);
    
    printf("Account Balance: %.2f",$acc);
    