<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ランダムなメッセージ</h1>
    
<?php

$array = [
    'おはよう',
    'こんにちは',
    'こんばんは',
    'おやすみ',
];

$randIndex = array_rand($array);

echo $array[$randIndex];
?>
</body>
</html>
