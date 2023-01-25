<?php
    // ＜アルゴリズムの注意点＞
    // アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    // 検索して答えを探して解いても考える力には繋がりません。
    // まずは検索に頼らずに自分で処理手順を考えてみましょう。

    //また、【その処理が必要かどうか・適切かを考えるため、コメントアウトで一行毎に処理の内容を記述してください。】


    // 問.以下は自動販売機のお釣りを計算するプログラムです。
    // 150円のお茶を購入した際のお釣りを計算して表示してください。
    // 計算内容は関数に記述し、関数を呼び出して結果表示すること
    // $yen と $product の金額を変更して計算が合っているか検証を行うこと

    // 表示例1）
    // 10000円札で購入した場合、
    // 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

    // 表示例2）
    // 100円玉で購入した場合、
    // 50円足りません。

    $yen = 151;   // 購入金額
    $product = 150; // 商品金額

    function calc($yen, $product)
    {
        // この関数内に処理を記述
        //おつりを計算する
        $changeMoney = $yen - $product;

        //お釣りが0円だった場合「お釣りなし」と表示
        if ($changeMoney == 0){
            return ['お釣りなし', []];
        }

        //お釣りがマイナスになっていたら「ｘｘ円不足」と表示
        if ($changeMoney < 0){
            return [$changeMoney . '円不足', []];
        }

        //通貨を配列に格納
        $currencyJapan = [10000, 5000, 1000, 500, 100, 50, 10, 5, 1];

        //currencyJapanの通貨が何枚あるかを格納する配列
        $tmpCurrency = [];

        //currencyJapanに格納されている通貨が何枚あるか調べる
        foreach ($currencyJapan as $val) {
            if ($changeMoney < $val) continue;
            $tmpCurrency[] = [$val, intdiv($changeMoney, $val)];
            $changeMoney = $changeMoney % $val;
        }
        return ['お釣り', $tmpCurrency];
    }
?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>お釣り</title>
    </head>

    <body>
        <section>
            <!-- ここに結果表示 -->
            <?php

                //（デバッグ用）購入金額と商品代金を表示
                echo '購入金額'.$yen.'円'."<br>";
                echo '商品代金'.$product.'円'."<br>";

                //おつり計算関数へ配列が返ってくるようになっている
                [$result, $ar] = calc($yen, $product);
                echo $result . '<br>';
                foreach ($ar as [$key, $val]) {
                    echo $key . '円 x ' . $val . '枚<br>';
                }
            ?>
        </section>
    </body>

</html>