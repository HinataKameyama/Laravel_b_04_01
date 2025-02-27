<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>料理選択画面</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>献立入力</h1>
        <!-- フラッシュメッセージ -->
        @if (session('status'))
        <p>{{ session('status') }}</p>
        @endif

    <form action="/selectdish" method="POST">
    @csrf
    	<div>
            <label for="dish">主食:</label>
            <select name="stapleDish" id="dish" required>
                @foreach ($stapleDishes as $stapleDish)
                    <option value="{{ $stapleDish->name }}">{{ $stapleDish->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="dish">主菜:</label>
            <select name="mainDish" id="dish" required>
                @foreach ($mainDishes as $mainDish)
                    <option value="{{ $mainDish->name }}">{{ $mainDish->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="dish">副菜:</label>
            <select name="sideDish" id="dish" required>
                @foreach ($sideDishes as $sideDish)
                    <option value="{{ $sideDish->name }}">{{ $sideDish->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="comment">コメント:</label>
            <textarea name="comment" id="comment" rows="4"></textarea>
        </div>

        <button type="submit">結果を表示</button>
    </form>
</body>
</html>