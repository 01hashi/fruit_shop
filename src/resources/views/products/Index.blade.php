<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>商品一覧ページ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/Index.css') }}" />
</head>
<body>
　<header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
      mogitate
      </a>
    </div>
  </header>
    
  <main>
  　<h1>商品一覧</h1>
    <div class="container">
        <!-- 検索バー -->
        <div class="search-bar">
            <form method="GET" action="{{ route('products.Index') }}">
                <input type="text" name="search" placeholder="フルーツを検索" value="{{ request('search') }}">
                <button type="submit">検索</button>
            </form>
        </div>
        <!-- 商品一覧 -->
        <div class="product-list">
            @php
              $fruits = [
                  ['name' => 'キウイ', 'price' => ￥800, 'image' => 'images/kiwi.png'],
                  ['name' => 'ストロベリー', 'price' => ￥1200, 'image' => 'images/strawberry.png'],
                  ['name' => 'オレンジ', 'price' => ￥850, 'image' => 'images/orange.png'],
                  ['name' => 'スイカ', 'price' => ￥700, 'image' => 'images/watermelon.png'],
                  ['name' => 'ピーチ', 'price' => ￥1000, 'image' => 'images/peach.png'],
                  ['name' => 'シャインマスカット', 'price' => ￥1400, 'image' => 'images/muscat.png'],
                  ['name' => 'パイナップル', 'price' => ￥800, 'image' => 'images/pineapple.png'],
                  ['name' => 'ブドウ', 'price' => ￥1100, 'image' => 'images/grapes.png'],
                  ['name' => 'バナナ', 'price' => ￥600, 'image' => 'images/banana.png'],
                  ['name' => 'メロン', 'price' => ￥900, 'image' => 'images/melon.png'],
                ];
        </div>
    </div>
</body>

</html>