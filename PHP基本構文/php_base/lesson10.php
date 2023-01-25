<?php

    // 以下をそれぞれ表示してください。
    // 表示するタイミングによって自動で算出すること
    // ・現在日時（yyyy年mm月dd日 H時i分s秒）
    // ・現在日時から3日後
    // ・現在日時から12時間前
    // ・2020年元旦から現在までの経過日数
    // ・現在の西暦を和暦に変更して出力

    // 日時がおかしい場合、PHPのタイムゾーン設定を行ってください


    // ・現在日時（yyyy年mm月dd日 H時i分s秒）
    echo '現在時刻:'.date('Y年m月d日 H時i分s秒')."<br/>\n";

    // ・現在日時から3日後
    echo '3日後:'.date('Y年m月d日 H時i分s秒',strtotime("+3 day"))."<br/>\n";

    // ・現在日時から12時間前
    echo '12時間前:'.date('Y年m月d日 H時i分s秒',strtotime("-12 hour"))."<br/>\n";

    // ・2020年元旦から現在までの経過日数
    $dateNow = date('Y/m/d');
    $datePast = "2020/01/01";
    $dayDiff = (strtotime($dateNow)-strtotime($datePast))/(3600*24);

    echo '2020年元旦から現在までの経過日数:'.$dayDiff.'日'."<br/>\n";;

    // ・現在の西暦を和暦に変更して出力
    function jcConv($argYear) {
        $erasArray = array(
            array('year' => 2018, 'name' => '令和'),
            array('year' => 1988, 'name' => '平成'),
            array('year' => 1925, 'name' => '昭和'),
            array('year' => 1911, 'name' => '大正'),
            array('year' => 1867, 'name' => '明治')
        );

        foreach($erasArray as $eraInfo) {

            $baseYear = $eraInfo['year'];
            $eraName = $eraInfo['name'];

            if($argYear > $baseYear) {

                $eraYear = $argYear - $baseYear;

                if($eraYear === 1) {
                    return $eraName .'元年';
                }

                return $eraName . $eraYear .'年';
            }

        }
        return null;
    }

    echo '現在の和暦:'.jcConv(date('Y')); 

?>