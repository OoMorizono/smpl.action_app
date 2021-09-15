<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>出品者一覧</h1>
    <ul>
        @foreach ($items as $item)
            <!-- // リンク先をidで取得し名前で入力 -->
            <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
    
    <!-- 新規登録画面へジャンプする -->
    <a href="/items/create">出品する</a>
</body>
</html>