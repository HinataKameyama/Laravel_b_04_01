<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>結果表示画面</title>
</head>
<body>
    <!--主食、主菜、副菜のデータがある場合に、各料理とカテゴリ、カロリーを表示-->
    @if(isset($selectedStaple,$selectedMain,$selectedSide))
        <!--主食、主菜、副菜-->
        {{ $selectedStaple }}
        {{ $selectedMain }}
        {{ $selectedSide }}

        <!--選択した料理とそのカテゴリ、カロリー-->
        @foreach ($selectedAll as $all)
            <li>{{ $all -> category }}</li>
            <li>{{ $all -> name }}</li>
            <li>{{ $all -> calories }}</li>
        @endforeach

        <!--カロリーのみ抜き出した配列-->
        @foreach ($selectedCalories as $calories)
            <li>{{ $calories }}</li>
        @endforeach

        <!--合計カロリー-->
        {{ $totalCalorie }}

        <!--コメント-->
        {{ $comment }}

    @endif
</body>
</html>