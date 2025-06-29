<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$date    = $_POST['date'];
$nights  = $_POST['nights'];
$people  = $_POST['people'];
$message = $_POST['message'];

$time = date("Y-m-d H:i:s");
$str = "{$time},{$name},{$email},{$date},{$nights},{$people},{$message}\n";

file_put_contents('./data/data.txt', $str, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約完了</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #dfefff, #f6faff);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            background-color: white;
            margin: 60px auto;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #2FA6E9;
            margin-bottom: 20px;
        }

        .btn-link {
            display: inline-block;
            margin: 10px 10px;
            padding: 12px 24px;
            background-color: #2FA6E9;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-link:hover {
            background-color: #1b8fd6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>予約が完了しました！</h2>
        <p>ご予約ありがとうございます。内容を記録いたしました。</p>
        <a class="btn-link" href="read.php">予約一覧を見る</a>
        <a class="btn-link" href="post.php">もう一度予約する</a>
    </div>
</body>
</html>
