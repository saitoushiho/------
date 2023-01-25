<?php

    // 連想配列の要素name, age, genderに
    // 田中,25,男
    // という値を格納し、

    // 田中
    // 25歳・男性

    // という形で出力してください。

    //初期化
    $infoArray = array();

    //格納
    $infoArray = array('name'=>'田中',
                        'age'=>'25',
                        'gender'=>'男');

    //表示
    echo $infoArray['name'].'<br>';
    echo $infoArray['age'].'歳・', $infoArray['gender'].'性';

?>