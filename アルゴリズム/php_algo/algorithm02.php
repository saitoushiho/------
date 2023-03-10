<?php
    // ＜アルゴリズムの注意点＞
    // アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    // 検索して答えを探して解いても考える力には繋がりません。
    // まずは検索に頼らずに自分で処理手順を考えてみましょう。

    //また、【その処理が必要かどうか・適切かを考えるため、コメントアウトで一行毎に処理の内容を記述してください。】

    // 問.以下は1700から2096までの数字を順番に表示するプログラムです。
    // うるう年を判定するよう条件を追加し、例のように表示してください。
    // 判定は関数に記述し、関数を呼び出して結果表示すること

    // 表示例）
    // 1700年
    // 1701年
    // 1702年
    // 1703年
    // 1704年はうるう年です。
    // .
    // .
    // 1999年
    // 2000年はうるう年です。
    // .
    // .
    // 以下省略

    // ＜うるう年の条件＞
    // 西暦年が4で割り切れる年はうるう年
    // ただし、西暦年が100で割り切れる年はうるう年ではない
    // ただし、西暦年が400で割り切れる年はうるう年

    function isLeapYear($year){
        // この関数に判定処理を記述
        //西暦年が4で割り切れる、100で割り切れない、400で割り切れる　年は「xxxx年はうるうどしです。」を表示
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) { 
            return $year.'年はうるう年です。';
        } else {
            return $year.'年';
        }
    }

    isLeapYear(1893)

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>うるう年判定</title>
</head>

<body>
    <!-- ここに表示例の通り表示 -->
    <?php
        //forで1700~2096を引数に入れてうるう年か調べて表示する
        for ($i=1700; $i<=2096; $i++) {
            printf(isLeapYear($i)."<br>");
        }    
    ?>
</body>

</html>