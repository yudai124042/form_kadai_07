<?php
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

$name    = $_POST['name'];
$email   = $_POST['email'];
$date    = $_POST['date'];
$nights  = $_POST['nights'];
$people  = $_POST['people'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約内容確認</title>
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
            margin: 50px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2FA6E9;
            margin-bottom: 30px;
        }

        .confirm-item {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .confirm-item label {
            display: block;
            color: #555;
            font-weight: bold;
        }

        .confirm-item p {
            margin: 5px 0 0;
            color: #222;
        }

        .button-area {
            text-align: center;
            margin-top: 30px;
        }

        button, input[type="submit"] {
            background-color: #2FA6E9;
            color: white;
            border: none;
            padding: 12px 24px;
            margin: 0 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #1b8fd6;
        }

        a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ご予約内容のご確認</h2>

        <div class="confirm-item">
            <label>お名前</label>
            <p><?= h($name) ?></p>
        </div>

        <div class="confirm-item">
            <label>メールアドレス</label>
            <p><?= h($email) ?></p>
        </div>

        <div class="confirm-item">
            <label>宿泊日</label>
            <p><?= h($date) ?></p>
        </div>

        <div class="confirm-item">
            <label>宿泊数</label>
            <p><?= h($nights) ?>泊</p>
        </div>

        <div class="confirm-item">
            <label>人数</label>
            <p><?= h($people) ?>人</p>
        </div>

        <div class="confirm-item">
            <label>ご要望</label>
            <p><?= nl2br(h($message)) ?></p>
        </div>

        <form action="write.php" method="post">
            <!-- hidden で値を保持 -->
            <input type="hidden" name="name" value="<?= h($name) ?>">
            <input type="hidden" name="email" value="<?= h($email) ?>">
            <input type="hidden" name="date" value="<?= h($date) ?>">
            <input type="hidden" name="nights" value="<?= h($nights) ?>">
            <input type="hidden" name="people" value="<?= h($people) ?>">
            <input type="hidden" name="message" value="<?= h($message) ?>">

            <div class="button-area">
                <button type="button" onclick="history.back();">戻る</button>
                <input type="submit" value="予約を確定する">
            </div>
        </form>
    </div>
</body>
</html>
