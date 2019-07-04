<?php


$html = <<<EOH
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップ画面イメージ</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <p class="title">勉強会合同制作トップ</p>

    <div id="date_area">
        <div id="today_area">
            <div>
                2019年5月16日（木）<br />
                本日は勉強会を行う日です
            </div>
            <div>
                次の勉強会の日付は<br />
                2019年5月23日（木）です。
            </div>
        </div>
    </div>

    <div class="table-ul">
        
        <div><a href="hosoda/index.php">細田</a></div>
        <div><a href="kashimura/index.php">柏村</a></div>
        <div><a href="ejiri/index.php">江尻</a></div>
        <div><a href="shimizu/index.php">清水</a></div>
        <div><a href="niimi/index.php">新美</a></div>
        <div><a href="kamiji/index.php">上地</a></div>
    </div>

    
</body>
</html>
EOH;
#>>>

print $html
?>
