<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>結果表示画面</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!--主食、主菜、副菜のデータがある場合に、各料理とカテゴリ、カロリーを表示-->
    @if(isset($selectedStaple,$selectedMain,$selectedSide))
        <!--主食、主菜、副菜-->
        {{ $selectedStaple }}
        {{ $selectedMain }}
        {{ $selectedSide }}

        <!--選択した料理とそのカテゴリ、カロリーを表で表示-->
        <table>
            <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>メニュー</th>
                    <th>カロリー</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selectedAll as $all)
                    <tr>
                        <td>{{ $all -> category }}</td>
                        <td>{{ $all -> name }}</td>
                        <td>{{ $all -> calories }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <!--合計カロリー-->
        {{ $totalCalorie }}

        <!--コメント-->
        {{ $comment }}

    @endif

    <br>
    <div class="btn-back"><a href="/selectdish/create">料理選択画面に戻る</a></div>
</body>
</html>