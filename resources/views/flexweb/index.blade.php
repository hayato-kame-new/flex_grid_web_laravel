<html>
<head>
    <meta charset="UTF-8" >
    <title>フルーツデザートを求めて街歩き - FITTED</title>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- ファビコンの設定  --}}
    <link rel="shortcut icon" href="{{ asset('sotechimages/favicon.ico') }}">
    {{-- スマートフォンのタッチアイコン --}}
    <link rel="apple-touch-icon" href="{{ asset('sotechimages/apple-touch-icon.png') }}">
    <style></style>
</head>
<body>

<header>
    <div class="container">
        <a href="index.html">FITTED</a>
        <nav>
            <ul>
                <li><a href="{{ route('flexweb.index') }}">トップ</a></li>
                <li><a href="{{ route('flexweb.about') }}">サイトについて</a></li>
                <li><a href="{{ route('flexweb.contact') }}">お問合わせ</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero">
    <h1>Your Healthy Lifestyle</h1>

    <p>理想的なライフスタイルを作り出す</p>

    <a href="#">街歩きからはじめてみる</a>

</section>

<section class="toppost">
    <h2>TOPICS</h2>

    <div class="container">
        <article>
            <a href="{{ route('flexweb.post01') }}">
                <figure>
                    <img src="{{ asset('images/fruits.jpg') }}" alt="" />
                </figure>
                <h3>
                    フルーツデザートを求めて街歩き
                </h3>
            </a>
        </article>
        <article>
            <a href="">
                <figure>
                    <img src="{{ asset('images/cycle.jpg') }}" alt="" />
                </figure>
                <h3>
                    自転車で行けるところまで行ってみる
                </h3>
            </a>
        </article>
        <article>
            <a href="">
                <figure>
                    <img src="{{ asset('images/green.jpg') }}" alt="" />
                </figure>
                <h3>
                    緑のワンポイント
                </h3>
            </a>
        </article>
        <article>
            <a href="">
                <figure>
                    <img src="{{ asset('images/time.jpg') }}" alt="" />
                </figure>
                <h3>
                    タイムアタックでやる気を出してみる
                </h3>
            </a>
        </article>
    </div>
</section>

<footer>
©︎FITTED
</footer>

{{-- <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script> --}}
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
</body>

</html>
