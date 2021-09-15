<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>auction create</title>
</head>
<body>
    @if($errors->any())
    <div class="error">
        <p>
            <b>{{ count($errors) }}件があります｡</b>
        </p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>商品登録フォーム</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="name">商品名</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </p>
        <p>
            <label for="name">商品詳細</label>
            <input type="text" name="description" value="{{ old('description') }}">
        </p>
        <p>
            <label for="name">価格</label>
            <input type="number" name="price" value="{{ old('price') }}">
        </p>
        <p>
            <label for="name">出品者</label>
            <input type="text" name="seller" value="{{ old('seller') }}">
        </p>
        <p>
            <label for="name">電子メール</label>
            <input type="text" name="email" value="{{ old('email') }}">
        </p>
        <p>
            <label for="name">商品画像URL</label>
            <input type="text" name="image_url" value="{{ old('image_url') }}">
        </p>
        <input type="submit" value="登録">
    </form>
</body>
</html>







