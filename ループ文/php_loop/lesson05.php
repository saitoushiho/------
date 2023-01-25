
<?php
    //ここに果物のデータを格納した配列$fruitsがあります。

    $fruits = [
       ['id' => 0, 'name' => 'いちご', 'price' => 100],
       ['id' => 1, 'name' => 'りんご', 'price' => 120],
        ['id' => 2, 'name' => 'もも', 'price' => 200],
        ['id' => 3, 'name' => 'バナナ', 'price' => 150],
        ['id' => 4, 'name' => 'みかん', 'price' => 130]
    ];

    //上記の配列から、任意のインデックス番号を関数の引数に入れるとそのデータを返すような関数を作成し、
    //呼び出したデータをループ文を使用して画面にテーブル表示させてください
    //例)引数が0の時
    //┏━━━━━┳━━━━━━━━┳━━━━━━━━┓
    //┃　id　┃　name　┃　price　┃
    //┣━━━━━╋━━━━━━━━╋━━━━━━━━┃
    //┃  0  ┃ いちご　┃　100円　┃
    //┗━━━━━┻━━━━━━━━┻━━━━━━━━┛

    //指定行を返す関数
    function tableReturn($valId){
?>
            <table border="1" > 
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                </tr>
                <?php 
                global $fruits;
                foreach ($fruits as $fruitsVal){ 
                  if($fruitsVal['id']==$valId){ ?>
                    <tr>
                        <td>
                        <?= $fruitsVal['id'] ?>
                        </td>
                        <td>
                        <?= $fruitsVal['name'] ?>
                        </td>
                        <td>
                        <?= $fruitsVal['price'] ?>
                        </td>
                    </tr>
                <?php } }?> 
            </table>
    
    <?php
        }

        //実行
        tableReturn(0)

    ?>