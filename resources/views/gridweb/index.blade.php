<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>WAVE</title>
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="{{ asset('css/gridstyle.css') }}" >
</head>
<body>

<header>
    WAVE
</header>

<nav>
    <ul>
        <li><a href="{{ route('gridweb.index') }}">トップ</a></li>
        <li><a href="">サイトについて</a></li>
        <li><a href="">お問合せ</a></li>
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

<section>
    <article>
        <a href="{{ route('gridweb.post01') }}">
            <figure>
                <img src="{{ asset('gridimages/note.jpg') }}" alt="" />
            </figure>
            <h2>スケッチが楽しくなるノート</h2>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post02') }}">
            <figure>
                <img src="{{ asset('gridimages/plant.jpg') }}" alt="" />
            </figure>
            <h2>緑のアクセントならこれ</h2>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post03') }}">
            <figure>
                <img src="{{ asset('gridimages/items.jpg') }}" alt="" />
            </figure>
            <h2>小物と飾り棚の組み合わせ</h2>
        </a>
    </article>
    <article>
        <a href="{{ route('gridweb.post04') }}">
            <figure>
                <img src="{{ asset('gridimages/chair.jpg') }}" alt="" />
            </figure>
            <h2>居心地のいい部屋にあるもの</h2>
        </a>
    </article>
</section>

<footer>
    &copy; WAVE
</footer>

</body>
</html>


