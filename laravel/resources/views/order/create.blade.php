<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文フォーム</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <h1>料理注文フォーム</h1>

    <!-- フラッシュメッセージ -->
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form action="/order" method="POST">
        @csrf
        <div>
            <label for="name">予約者名:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="people_count">人数:</label>
            <input type="number" name="people_count" id="people_count" required>
        </div>

        <div>
            <label for="dish">料理名:</label>
            <select name="dish" id="dish" required>
                @foreach ($dishes as $dish)
                    <option value="{{ $dish }}">{{ $dish }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="remarks">備考:</label>
            <textarea name="remarks" id="remarks" rows="4"></textarea>
        </div>

        <button type="submit">注文する</button>
    </form>

</body>
</html>