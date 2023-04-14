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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            background-color: #F59084;
        }


        /* ------------------------header section-------------------------- */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header__logo img {
            width: 60px;
            height: 60px;
            margin-left: 16px;
            margin-top: 12px;
        }

        .header__nav i {
            font-size: 24px;
            color: #ffffff;
            margin-right: 16px;
        }

        /* --------------------main section---------------------- */
        .main {
            margin: 32px 16px;
        }


        /* ---switch--- */
        .switch {
            margin: 0 auto 64px auto;
            width: 280px;
            height: 60px;
            background-color: #ffffff;
            display: flex;
            border-radius: 100px;
            position: relative;
        }

        .switch__button--left a {
            color: #909090;
            text-decoration: none;
            width: 140px;
            height: 56px;
            border-radius: 100px;
            position: absolute; /* switchに対して、相対位置にする */
            top: 2px;
            left: 2px;
            display: inline-block; /* inline-blockにする */
            text-align: center; /* 横方向中央ぞろえにする */
            line-height: 56px; /* 縦方向中央ぞろえにする */
            vertical-align: middle; /* 縦方向中央ぞろえにする */
        }

        .switch__button--right a {
            color: #ffffff;
            text-decoration: none;
            width: 140px;
            height: 56px;
            border-radius: 100px;
            background-color: #F59084;
            position: absolute; /* switchに対して、相対位置にする */
            top: 2px;
            right: 2px;
            display: inline-block; /* inline-blockにする */
            text-align: center; /* 横方向中央ぞろえにする */
            line-height: 56px; /* 縦方向中央ぞろえにする */
            vertical-align: middle; /* 縦方向中央ぞろえにする */
        }


        /* ---form--- */
        /* .form {

        } */

        .name {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 36px;

        }

        .name__label {
            color: #ffffff;
            display: flex;
            /* align-items: center; */
            /* justify-content: center; */
            width: 358px;
            margin-bottom: 8px;
        }

        .name__label i {
            margin-right: 4px;
        }

        .name__input {
            width: 358px;
            height: 72px;
            border-radius: 12px;
            border: none;
            padding: 4px 8px;
        }

        .memo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 36px;
        }

        .memo__label {
            color: #ffffff;
            display: flex;
            /* align-items: center; */
            /* justify-content: center; */
            width: 358px;
            margin-bottom: 8px;
        }

        .memo__label i {
            margin-right: 4px;
        }

        .memo__input {
            width: 358px;
            height: 200px;
            border-radius: 12px;
            border: none;
            padding: 4px 8px;
        }

        /* -------button--------- */
        .form__button {
            /*display: block;*/
            width: 280px;
            height: 64px;
            background-color: #ffffff;
            margin: 0 auto;
            border-radius: 100px;
            border: none;
            color: #F59084;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form__button i {
            font-size: 28px;
            margin-right: 5px;
            transform: translateX(-20%);
        }

        .form__button span {
            font-size: 18px;
            transform: translateX(-20%);
        }

    </style>
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
