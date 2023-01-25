<?php

    // 多次元配列で配列の中に連想配列を作り、
    // name,age,genderを格納したデータを用意してください。

    // そのデータを元に

    // 田中25男
    // 鈴木20男
    // 佐藤23女

    // という形でループ構文を使用して出力してください。
    // 上記処理後、鈴木の年齢のみを下部に出力してください。

    //配列にデータを格納
    $idArray = [
        'name'=>['田中','鈴木','佐藤'],
        'age'=>['25','20','23'],
        'gender'=>['男','男','女']
    ];

    //配列をループ
    foreach($idArray["name"] as $keyItem => $valItem) {
        echo $valItem.$idArray["age"][$keyItem].$idArray["gender"][$keyItem]."<br>";
        //鈴木の年齢用
        if($valItem="鈴木"){
           $suzukiAge=$idArray["age"][$keyItem];
        }
    }

    //鈴木の年齢 
    echo "<br>".$suzukiAge

?>