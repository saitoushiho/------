<?php
    // ＜アルゴリズムの注意点＞
    // アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
    // 検索して答えを探して解いても考える力には繋がりません。
    // まずは検索に頼らずに自分で処理手順を考えてみましょう。

    //また、【その処理が必要かどうか・適切かを考えるため、コメントアウトで一行毎に処理の内容を記述してください。】

    //問.ふたつの配列を結合する関数を作成してください。
    //例)[1, 2, 3]と[a, b, c]という配列→関数の返り値は[1, a, 2, b, 3, c]

    $numbersArray = ['1', '2', '3'];
    $wordArray = ['a', 'b', 'c'];
    $returnValueArray=[];
    
    //二つの配列を結合する関数
    function alternatingArray($numbers,$word){
        //numbersArrayの数だけreturnValueArrayに格納していく
        for ($i = 0; $i < count($numbers); $i++) {
            $returnValueArray[]=$numbers[$i];
            $returnValueArray[]=$word[$i]; 
        }
        return $returnValueArray;
    }

    //二つの配列を結合
    $returnValue=alternatingArray($numbersArray,$wordArray);
    
    //中身を取り出していく
    foreach($returnValue as $value) {
         echo $value.',';
    }

?>