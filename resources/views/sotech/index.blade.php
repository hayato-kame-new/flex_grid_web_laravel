<html>
<head>
    <meta charset="UTF-8" >
    <title>cafe</title>
    {{-- 互換モードが働くと、レイアウトが崩れるらしく、それを停止するためのmetaタグをかく --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0" >
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sotechstyle.css') }}">
    {{-- ファビコンの設定  --}}
    <link rel="shortcut icon" href="{{ asset('sotechimages/favicon.ico') }}">
    {{-- スマートフォンのタッチアイコン --}}
    <link rel="apple-touch-icon" href="{{ asset('sotechimages/apple-touch-icon.png') }}">
    <style></style>
</head>
<body>

<header>
    {{-- aタグの中には何の要素でも入れられるようになりました --}}
    <a href="index.html"><h1><img src="{{ asset('sotechimages/logo.svg') }}" alt="ロゴ"></h1></a>

    Welcome to Space Cafe
</header>

{{--  無理してmainメインタグは使わなくていい、まだ対応してないところがあるから divタグを使えばいい  --}}
<div>
    <div class="container">

        <nav>
            <ul>
                <li><a href="{{ route('sotech.index') }}">TOP</a></li>
                <li><a href="{{ route('sotech.menu') }}">MENU</a></li>
                <li><a href="{{ route('sotech.access') }}">ACCESS</a></li>
                <li><a href="{{ route('sotech.contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </div>

    <section>
        <a href="{{ route('sotech.menu') }} ">
            <img src="{{ asset('sotechimages/bg_menu.jpg') }}" alt="メニュー画像">
            <h2>MENU</h2>
        </a>
    </section>
    <section>
        <a href="{{ route('sotech.access') }}">
            <img src="{{ asset('sotechimages/bg_access.jpg') }}" alt="アクセス画像">
            <h2>ACCESS</h2>
        </a>
    </section>

    <section>
        <a href="{{ route('sotech.contact') }}">
            <h2>CONTACT</h2>
            お問い合わせはこちら
        </a>
    </section>


    {{-- <section class="toppost">
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
    </section> --}}

</div>
    <footer>
        © SPACE CAFE
    </footer>

{{-- <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script> --}}
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
</body>

</html>
