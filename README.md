# お問い合わせフォーム
## 環境構築
[](Dockerのビルドからマイグレーション、シーディングまでを記述する)
Dockerビルド
1. git clone リンク
2. docker-compose up-d --build
＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。
Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed
# 使用技術
<!-- ((例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)) -->
* PHP 7.4.9
* Laravel 8.6.12
* MySQL 8.0.26
# URL
* 開発環境：http://localhost/
* phpMyadmin：http://localhost:8080/
# 既知の問題
* ログアウト後に404になる（ログイン画面に戻らない）
* 管理画面の表示、検索、エクスポート機能未実装
* モーダルウィンドレイアウト
* レイアウト、CSS共通化など
## ER図
<!-- < - - - 作成したER図の画像 - - - > -->
