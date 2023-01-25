<?php
    // 100円の鉛筆を3本
    // 200円のノートを1冊買いました。

    // 各値段と個数を変数に代入し、
    // その変数を利用した形で計算した合計値を$sumと言う変数に代入して
    // 「○○○円です。」という形で出力してください。

    //変数の宣言
    $pencil = 100;
    $pencilQuantity = 3;
    $note = 200;
    $noteQuantity = 1;

    //計算
    $sum = ($pencil * $pencilQuantity) + ($note * $noteQuantity);
    
    //表示
    echo $sum.'円です。';

?>