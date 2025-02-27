<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ作成</title>
</head>
<body>

    <h1>メモ作成</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form action="/notes" method="POST">
        @csrf
        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="detail">詳細:</label>
            <textarea name="detail" id="detail" rows="4" required></textarea>
        </div>

        <button type="submit">保存</button>
    </form>

    <br><a href="/notes">メモ一覧を見る</a>

</body>
</html>