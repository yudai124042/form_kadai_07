<?php
$data = file('./data/data.txt', FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>予約一覧</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2>これまでの予約一覧</h2>
    <table>
        <tr>
            <th>予約日時</th><th>名前</th><th>メール</th><th>宿泊日</th><th>宿泊数</th><th>人数</th><th>ご要望</th>
        </tr>
        <?php foreach ($data as $line): ?>
            <?php $fields = explode(',', $line); ?>
            <?php if (count($fields) >= 7): ?>
                <tr>
                    <?php foreach ($fields as $field): ?>
                        <td><?= htmlspecialchars($field, ENT_QUOTES) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
