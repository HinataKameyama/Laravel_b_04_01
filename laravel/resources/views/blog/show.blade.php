<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article['title'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <!-- ヘッダーのインクルード -->
    @include('components.header')

    <div class="container">
        <div class="main-content">
            <h1>{{ $article['title'] }}</h1>
            <div class="article-content">
                <p>{{ $article['content'] }}</p>
                <!-- 画像の表示 -->
                <img src="{{ asset($article['image']) }}" alt="記事画像" class="article-image">
            </div>
        </div>

        <!-- サイドバー -->
        <div class="sidebar">
            <h2>サイドバー</h2>
            <p>おすすめ記事やリンクを表示します。</p>
        </div>
    </div>

    <!-- フッター（例）-->
    <footer>
        <p>&copy; 2025 MyBlog</p>
    </footer>

</body>
</html>