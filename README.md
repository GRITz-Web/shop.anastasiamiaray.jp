🔁 ホットリロード環境の構築（BrowserSync + PHP Server）
このプロジェクトでは、PHP Server の上に BrowserSync を重ねてホットリロードを実現しています。
HTML / CSS / JS / PHP ファイルの変更をリアルタイムでブラウザに反映できます。

✅ 前提条件
Node.js がインストールされていること

PHP Server がポート 3002 で起動していること
（例：http://localhost:3002）

🔧 セットアップ手順

1. BrowserSync をグローバルインストール
   npm install -g browser-sync

2. PHP Server をポート 3002 で起動
   http://localhost:3002

3. BrowserSync を起動（プロキシモード）
   browser-sync start --proxy "localhost:3002" --files "**/\*.php, **/_.html, \*\*/_.css, \*_/_.js"

4. ブラウザでアクセス
   BrowserSync 用の URL（起動時に表示されます）例：
   http://localhost:3000
   ※ ブラウザは http://localhost:3000 にアクセスしてください。
   ※ 3002 は PHP サーバー用、3000 は BrowserSync 用の表示ポートです。

📁 監視対象ファイル
.php
.html
.css
.js

🔄 よくある用途
作業内容 自動反映される？
HTML / CSS / JS 編集 ✅
PHP テンプレート編集 ✅
画像やフォント変更 ❌（必要に応じて拡張可能）

🔚 注意事項
ポート 3000 または 3002 が他のアプリで使用中の場合、別のポートに変更してください。

本番環境では BrowserSync は使用しません（開発用のみ）。
