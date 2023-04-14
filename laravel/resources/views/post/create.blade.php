<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>おまだれ？</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/post_create_style.css">
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <img src="/img/logo.png" alt="おまだれ？">
        </div>
        <div class="header__nav">
            <a href="{{ route('logout') }}"><i class="bi bi-list"></i></a>
        </div>
    </header>
    <main class="main">
        <!-- switch section -->
        <div class="switch">
            <div class="switch__button--left">
                <a href="{{ route('post.index') }}">一覧</a>
            </div>
            <div class="switch__button--right">
                <a href="{{ route('post.create') }}">作成</a>
            </div>
        </div>
        <!-- form section -->
        <form action="{{  route('post.store')  }}" class="form" method="post">
            @csrf
            <div class="name">
                <label for="friend_name" class="name__label">
                    <i class="bi bi-person"></i>
                    <span>名前/ニックネーム</span>
                </label>
                <input type="string" name="friend_name" class="name__input">
            </div>
            <div class="memo">
                <label for="memo" class="memo__label">
                    <i class="bi bi-pen"></i>
                    <span>メモ</span>
                </label>
                <textarea type="text" name="memo" id="" cols="30" rows="10" class="memo__input"></textarea>
            </div>
            <!-- button -->
            <button class="form__button">
                <i class="bi bi-plus"></i>
                <span>覚える</span>
            </button>
        </form>
    </main>
</body>
</html>
