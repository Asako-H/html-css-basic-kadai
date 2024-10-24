<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sort課題</title>
</head>
<body>
    <p>
        <?php
        // 配列をソートし、1行ずつ表示する関数
        function sort_2way($array, $order = 'asc') {
            // 昇順の場合
            if ($order === 'asc') {
                sort($array); // 昇順にソート
            } 
            // 降順の場合
            else if ($order === 'desc') {
                rsort($array); // 降順にソート
            }
        
            // ソート結果を1行ずつ表示
            foreach ($array as $num) {
                echo $num . '<br>';
            }
        }
        
        // 配列
        $nums = [15, 4, 18, 23, 10];
        
        // 昇順で表示
        echo "昇順ソートします <br>";
        sort_2way($nums, 'asc');
        
        // 改行を入れる
        echo '<br>';
        
        // 降順で表示
        echo "降順ソートします <br>";
        sort_2way($nums, 'desc');
        ?>
    </p>
</body>
</html>