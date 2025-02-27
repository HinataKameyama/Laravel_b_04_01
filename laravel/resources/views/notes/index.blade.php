<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ一覧</title>
</head>
<body>

    <h1>メモ一覧</h1>

    <a href="/notes/filter">タイトル10文字以上のメモを表示</a>

    <ul>
        @foreach ($notes as $note)
            <li>
                <h2>{{ $note->title }}</h2>
                <p>{{ $note->detail }}</p>
            </li>
        @endforeach
    </ul>

    <br><a href="/notes/create">メモを作成する</a>

</body>
</html>