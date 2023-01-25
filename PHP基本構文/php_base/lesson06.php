<?php

    //各変数に値を指定のデータ型で代入し、画面にデータ型を出力させることで確認してください。

    //Q1.値：Hello world.　データ型：string

    //Q2.値：10　データ型：integer

    //Q3.値：2.5　データ型：float(double)

    //Q4.値：false　データ型：boolean

    //Q5.値：null　データ型：null


    //値入力
    $stringLetter='Hello world.';
    $integerLetter=10;
    $floatLetter=2.5;
    $booleanLetter=false;
    $nullLetter=null;

    
    //=======もっといい方法あるかも============
    //値表示用if
    if($booleanLetter==false){
        $booleanDisplay='false';
    }else{
        $booleanDisplay='true';
    };

    if(is_null($nullLetter)){
        $nullDisplay='null';
    };
    //=======================================
    
    //表示
    echo 'Q1.値：'.$stringLetter.' データ型：'.gettype($stringLetter).'<br>';
    echo 'Q2.値：'.$integerLetter.' データ型：'.gettype($integerLetter).'<br>';
    echo 'Q3.値：'.$floatLetter.' データ型：'.gettype($floatLetter).'<br>';
    echo 'Q4.値：'.$booleanDisplay.' データ型：'.gettype($booleanLetter).'<br>';
    echo 'Q5.値：'.$nullDisplay.' データ型：'.gettype($nullLetter).'<br>';


    ?>