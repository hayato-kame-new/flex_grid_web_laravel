<html>
<head>
    <meta charset="UTF-8" >
    <title>お問い合わせ - FITTED</title>
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

<div class="contents">
    <div class="container">
        <article class="about_article">

            <h1>お問合わせ</h1>

            <p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。
                記事に関するご質問などもお気軽にお寄せください。
            </p>

            <form method="post" action="">

                <p>
                    <label>名前: <input type="text" name="name"></label>
                </p>

                <p>
                    <label>メールアドレス: <input type="email" name="mail"></label>
                </p>

                <p>
                    <label>コメント: <textarea name="comment"></textarea></label>
                </p>

                <p><input type="submit" value="送信" /></p>
            </form>

        </article>
    </div>
</div>

<footer>
©︎FITTED
</footer>

{{-- <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script> --}}
<script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
</body>

</html>
