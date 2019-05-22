<?php
// ルーティング定義
$url = $_SERVER['REQUEST_URI'];
switch ($url) {
    case '/':
        $path = 'top.php';
        break;
    case '/eziri':
        $path = 'eziri/index.php';
        break;
    case '/hosoda':
        $path = '/hosoda/index.php';
        break;
    case 'kashimura':
        $path = 'kashimura/index.php';
        break;
    case '/shimizu':
        $path = 'shimizu/index.php';
        break;
    default:
        echo 'お探しのページは見つかりませんでした。';
}

require($path);