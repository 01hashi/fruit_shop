<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <title>商品一覧</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>検索</h2>
            <form method="GET" action="">
                <input type="text" name="search" placeholder="フルーツを検索" />
                <button type="submit">検索</button>
            </form>
            <div class="fruits-image">
                <img src="fruits.jpg" alt="フルーツの画像" />
            </div>
        </aside>
        <main class="product-list">
            <!-- 商品一覧をここに表示 -->
            <!-- 例としてダミーの商品を表示 -->
            <div class="product-item">リンゴ</div>
            <div class="product-item">バナナ</div>
            <div class="product-item">オレンジ</div>
            <!-- 実際のデータに合わせて動的に生成してください -->
        </main>
    </div>
</body>
</html>