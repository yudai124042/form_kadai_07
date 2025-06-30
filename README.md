# form_kadai_07

ホテル予約システム（PHP / XAMPP）
📌 概要
このプロジェクトは、PHPとテキストファイルを使って構築したシンプルなホテル予約システムです。
ユーザーがフォームに情報を入力し、確認画面を経て予約を確定すると、内容がテキストファイルに保存され、一覧として閲覧できます。

🔁 機能の流れ
css
コピーする
1. [post.php]      ：予約フォーム（ユーザー入力）
2. [post_confirm.php] ：予約確認画面（POST受信 → 表示）
3. [write.php]     ：予約内容を data.txt に保存（予約完了画面）
4. [read.php]      ：保存された予約一覧を表示
🗂 ディレクトリ構成
arduino
コピーする
htdocs/
└── hotel_reserve/
    ├── post.php              // 入力フォーム
    ├── post_confirm.php      // 入力確認
    ├── write.php             // データ保存
    ├── read.php              // 一覧表示
    └── data/
        └── data.txt          // 保存先（空ファイルでOK）
🚀 使用方法
① XAMPPの起動
Apache を起動

ブラウザで http://localhost/hotel_reserve/post.php にアクセス

② 予約の流れ
フォームに名前・宿泊日などを入力 → 送信

入力内容の確認画面で「予約を確定」

完了画面が表示され、内容は data/data.txt に保存

「予約一覧を見る」で read.php にアクセス可能

💡 特徴・ポイント
全画面に統一されたクリーンなCSSデザインを採用

file_put_contents() を用いたテキスト保存型

htmlspecialchars() によるXSS対策済み

モバイルフレンドリーなフォームUI

ローカル開発学習に最適（データベース不要）

⚠ 注意点
data/data.txt が存在しない場合は作成してください

ファイルの書き込み権限が必要です（MacやLinuxでは chmod 777 推奨）

データは永続的に保存されるため、定期的に削除・管理してください

🔧 今後の発展アイデア
バリデーションの追加（入力チェック）

メール送信機能の実装（mb_send_mail()）

データベース連携（MySQL / PDO）

予約削除・編集機能

管理者ログインページの作成

👨‍🏫 対象ユーザー
