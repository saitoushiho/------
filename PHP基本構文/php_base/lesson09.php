<?php

    // 今日の日付けを以下の形式で表示してください。

    // Q1.xxxx-xx-xx (年-月-日)

    // Q2.xxxx/xx/xx Mon (年/月/日　曜日を英語表記)

    // Q3.xxxx年xx月xx日（x曜日）

    //現在時刻を取得
    $todayTime = new DateTime();
    
    //Q1.
    echo $todayTime->format('Y-m-d')."<br/>\n";

    //Q2.
    echo $todayTime->format('Y/m/d D')."<br/>\n";

    //Q3.
    //関数にしていつでも呼び出せるようにする
    function dayOfWeek($argWeek){
        $weekArray = array(
        '(日曜日)',//0
        '(月曜日)',//1
        '(火曜日)',//2
        '(水曜日)',//3
        '(木曜日)',//4
        '(金曜日)',//5
        '(土曜日)'//6
        );
        return $weekArray["$argWeek"];
       }

    echo $todayTime->format('Y年m月d日 '.dayOfWeek($todayTime->format('w')))."<br/>\n";

?>