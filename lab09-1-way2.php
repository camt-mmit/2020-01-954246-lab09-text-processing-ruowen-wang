<?php
/*
*** 602110190 ruowen wang
    wecaht:602110190 ruowen wang
*/
$fp = fopen($_SERVER['argv'][1], 'r');
fscanf($fp, "%s %s", $tran['first'], $tran['last']);
printf("Transaction for:\n");
fscanf($fp, "%d", $n);
printf("First name: %s\n",$tran['first'] );
printf("First name: %s\n",$tran['last'] );
printf("Number of transactions:%d\n",$n);
for($i = 0; $i < $n; $i++) {
    fscanf($fp, "%s %f", $tran['first'], $tran['last']);
    $trans[] = $tran;
}
for($i = 0; $i < $n; $i++) {
    printf("%8.s : %2.2f\n",$trans[$i]['first'], $trans[$i]['last']);
    if($trans[$i]['first']== 'withdraw'|| $trans[$i]['first']== 'WITHDRAW' || $trans[$i]['first']== 'wItHDrAw'){$trans[$i]['last'] = 0-$trans[$i]['last'];}
    if($trans[$i]['first']== 'balANCE' || $trans[$i]['first']== 'DEPOXXX' || $trans[$i]['first']== 'Opposit'){$trans[$i]['last'] = 0;}
    $result+=$trans[$i]['last'];
}
printf("Account Balance:  %s\n",$result );

