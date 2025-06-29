<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホテル予約フォーム</title>
    <style>
        * {
            box-sizing: border-box;
        }
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
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 4px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #2FA6E9;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #1b8fd6;
        }

        @media screen and (max-width: 600px) {
            .container {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ホテル予約フォーム</h2>
        <form action="post_confirm.php" method="post">
            <label for="name">お名前</label>
            <input type="text" name="name" id="name" required>

            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" required>

            <label for="date">宿泊日</label>
            <input type="date" name="date" id="date" required>

            <label for="nights">宿泊数</label>
            <input type="number" name="nights" id="nights" required>

            <label for="people">人数</label>
            <input type="number" name="people" id="people" required>

            <label for="message">ご要望</label>
            <textarea name="message" id="message" rows="5" placeholder="ご希望やご質問などがあればご記入ください"></textarea>

            <input type="submit" value="予約確認へ進む">
        </form>
    </div>
</body>
</html>
