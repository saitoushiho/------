<?php
    // ＜アルゴリズムの注意点＞
    // アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    // 検索して答えを探して解いても考える力には繋がりません。
    // まずは検索に頼らずに自分で処理手順を考えてみましょう。

    //また、【その処理が必要かどうか・適切かを考えるため、コメントアウトで一行毎に処理の内容を記述してください。】

    // 問.配列に10,60,90,70,50を点数として格納し
    // それぞれをif文で

    // 80点以上なら「優」
    // 60点以上なら「良」
    // 40点以上なら「可」
    // それ以下なら「不可」

    // という形で区別し、
    // ○○点は「○」です。と出力してください。

    //表示が以下の通りになり、配列の中身を変更したり要素数を増減させた時、その変化によって表示が変わるよう記述してください。
    // 10点は「不可」です。
    // 60点は「良」です。
    // 90点は「優」です。
    // 70点は「良」です。
    // 50点は「可」です。

    //配列にポイントを格納
    $pointsArray=[10,60,90,70,50,80,60,40,39];

    //foreachで配列の中身を見て判断する
    foreach($pointsArray as $pointsData){
        //点数が80以上だったら「優」を表示
        if($pointsData>=80){
            echo $pointsData.'点は「優」です。'."<br>";
        //点数が60以上だったら「良」を表示
        }elseif($pointsData>=60){
            echo $pointsData.'点は「良」です。'."<br>";
        //点数が40以上だったら「可」を表示
        }elseif($pointsData>=40){
            echo $pointsData.'点は「可」です。'."<br>";
        //点数が40以下だったら「不可」を表示
        }elseif($pointsData<=40){
            echo $pointsData.'点は「不可」です。'."<br>";
        }   
    }
?>