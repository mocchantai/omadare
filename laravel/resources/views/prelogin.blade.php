<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>おまだれ？</title>
    <link rel="stylesheet" href="/css/prelogin_style.css">
</head>
<body>

    <header class="header wrap">
        <div class="header-inner">
                <img src="/img/main_logo.jpg" alt="おまだれ？" width="174" height="72" class="main-logo">
            <nav class="gnav">
                <ul class="gnav-list">
                    <a href="{{ route('login') }} " id="login-button" class="button">ログイン</a>
                    <a href="{{ route('user.create') }}" id="register-button" class="button">新規登録</a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="hero">

        <img src="/img/top.jpg" alt="Top画像" >
        <p class="catch-copy">あなたの名前は忘れません</p>
    </div>




</body>
</html>
