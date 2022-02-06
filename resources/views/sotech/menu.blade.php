<html>
<head>
    <meta charset="UTF-8" >
    <title>MENU - cafe</title>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style></style>
</head>
<body>
MENUページ
<header>
    <div class="container">
        <a href="index.html">FITTED</a>
        <nav>
            <ul>
                <li><a href="index.html">トップ</a></li>
                <li><a href="about.html">サイトについて</a></li>
                <li><a href="contat.html">お問合わせ</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="contents">
    <div class="container">
        <article>
            <h1>フルーツデザートを求めて街歩き</h1>

            <time datetime="2020-97-25">
                <i class="far fa-clock"></i>
                2020年07月25日
            </time>

            <figure>
                <img src="{{ asset('images/fruits.jpg') }}" alt="さまざまな果物が盛り付けられたフルーツプレート">
            </figure>
            <p>街歩きをしているとお腹が空きます。そんな時におすすめなのがフルーツデザートです。</p>

            <p>AA果物は手軽に食べることができます。熱中症予防や疲労回復などの効果もあるので、
                街歩きのエネルギー補給にピッタリです。</p>

            <p>最近はふらっと立ち寄れるフルーツ専門店も増えてきました。珍しい南国フルーツのプレートや、
                その場で作ってくれるフレッシュジュースも美味しくてやみつきになります。</p>

        </article>

        <div class="sub">


            <aside class="profile">
                <h2>PROFILE</h2>
                <figure>
                    <img src="{{ asset('images/foot.svg') }}">
                </figure>
                <p>街歩き&食べ歩きがライフスタイル。天気がいい日はあちこちに出没しています。</p>
            </aside>

            <aside class="topics">
                <h2>TOPICS</h2>
                <ul>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="{{ asset('images/tomato.jpg') }}" alt="" />
                            </figure>
                            <h3>甘いトマトとすっぱいトマト</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="{{ asset('images/cycle.jpg') }}" alt="" />
                            </figure>
                            <h3>自転車で行けるとこまで行ってみる</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="{{ asset('images/green.jpg') }}" alt="" />
                            </figure>
                            <h3>緑のワンポイント</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="{{ asset('images/time.jpg') }}" alt="" />
                            </figure>
                            <h3>タイムアタックでやる気を出してみる</h3>
                        </a>
                    </li>

                </ul>
            </aside>
        </div>
    </div>
</div>

<footer>
©︎FITTED
</footer>

{{-- <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script> --}}
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
</body>

</html>
