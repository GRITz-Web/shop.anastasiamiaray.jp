<?php
// header.html を読み込む
$headerHtml = file_get_contents('default_assets/header.html');

// 相対パスを絶対パスに変換（header）
$headerHtml = preg_replace(
    '/(href|src)=(["\'])\/(?!\/)([^"\']*?)\2/',
    '$1=$2https://shop.anastasiamiaray.jp/$3$2',
    $headerHtml
);

// editページの内容を取得
ob_start();
include 'default_edit.php';
$topContent = ob_get_clean();

// 相対パスを絶対パスに変換（edit content内。ただし _custom.css は除く）
$topContent = preg_replace_callback(
    '/(href|src)=(["\'])\/(?!\/)([^"\']*?)\2/',
    function ($matches) {
        if (preg_match('/_custom\\.css$/', $matches[3])) {
            return $matches[0]; // 変換しない
        }
        return $matches[1] . '=' . $matches[2] . 'https://shop.anastasiamiaray.jp/' . $matches[3] . $matches[2];
    },
    $topContent
);

// プレースホルダー置換（必要な場合）
$topContent = str_replace(
    ['{=path.img=}', '{=path.root=}'],
    ['https://shop.anastasiamiaray.jp/img', 'https://shop.anastasiamiaray.jp'],
    $topContent
);

// footer.html を読み込む
$footerHtml = file_get_contents('default_assets/footer.html');

// 相対パスを絶対パスに変換（footer）
$footerHtml = preg_replace(
    '/(href|src)=(["\'])\/(?!\/)([^"\']*?)\2/',
    '$1=$2https://shop.anastasiamiaray.jp/$3$2',
    $footerHtml
);

// 結合して出力
echo $headerHtml . $topContent . $footerHtml;
