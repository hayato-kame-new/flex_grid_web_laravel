<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WAVE</title>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/gridstyle.css') }}" >
    {{-- ファビコンの設定  --}}
    <link rel="shortcut icon" href="{{ asset('sotechimages/favicon.ico') }}">
    {{-- スマートフォンのタッチアイコン --}}
    <link rel="apple-touch-icon" href="{{ asset('sotechimages/apple-touch-icon.png') }}">
</head>

{{-- bodyをグリッドコンテナにする --}}
<body>

<header>
    WAVE
</header>

<nav>
    {{-- ulをグリッドコンテナにする --}}
    <ul>
        <li><a href="{{ route('gridweb.index') }}">トップ</a></li>
        <li><a href="{{ route('gridweb.index') }}">サイトについて</a></li>
        <li><a href="{{ route('gridweb.index') }}">お問合せ</a></li>
    </ul>
</nav>

<figure class="hero">
    <img src="{{ asset('gridimages/room.jpg') }}" alt="快適な室内空間" />
</figure>

<h1>Best place to visit in the world</h1>

<p>
    <img src="{{ asset('gridimages/circle.svg') }}" alt="" /><br />
    <a href="#">空間を彩る多彩なアイテム</a>
</p>

{{-- sectionをグリッドコンテナにする --}}
<section>
    <h2>RECENT POSTS</h2>
    <article>
        <a href="{{ route('gridweb.post01') }}">
            <figure>
                <img src="{{ asset('gridimages/note.jpg') }}" alt="" />
            </figure>
            <h3>スケッチが楽しくなるノート</h3>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post02') }}">
            <figure>
                <img src="{{ asset('gridimages/plant.jpg') }}" alt="" />
            </figure>
            <h3>緑のアクセントならこれ</h3>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post03') }}">
            <figure>
                <img src="{{ asset('gridimages/items.jpg') }}" alt="" />
            </figure>
            <h3>小物と飾り棚の組み合わせ</h3>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post04') }}">
            <figure>
                <img src="{{ asset('gridimages/chair.jpg') }}" alt="" />
            </figure>
            <h3>居心地のいい部屋にあるもの</h3>
        </a>
    </article>
</section>

<footer>
    &copy; WAVE
</footer>

</body>
</html>


