<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/user_create_style.css">
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
            margin: 48px 16px;
        }




        /* ---form--- */
        .form {
            max-width: 384px;
            margin: 0 auto;
        }

        .form__section-title {
            color: #ffffff;
            margin-bottom: 20px;
        }

        .name, .email, .password {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 36px;
        }

        .name__input {
            width: 358px;
            height: 54px;
            margin-bottom: 10px;
            padding-left: 10px;
            color: #ffffff;
            background: none;
            border: none;
            border-bottom: 2px solid #ffffff; /* 下線の太さと色を指定 */
            outline: none; /*フォーカス時のアウトラインを消す*/
        }
        .name__input::placeholder {
            color: #ffffff;
        }

        .email__input {
            width: 358px;
            height: 54px;
            margin-bottom: 10px;
            padding-left: 10px;
            color: #ffffff;
            background: none;
            border: none;
            border-bottom: 2px solid #ffffff; /* 下線の太さと色を指定 */
            outline: none; /*フォーカス時のアウトラインを消す*/
        }
        .email__input::placeholder {
            color: #ffffff;
        }
        .password__input {
            width: 358px;
            height: 54px;
            margin-bottom: 10px;
            padding-left: 10px;
            color: #ffffff;
            background: none;
            border: none;
            border-bottom: 2px solid #ffffff; /* 下線の太さと色を指定 */
            outline: none; /*フォーカス時のアウトラインを消す*/
        }
        .password__input::placeholder {
            color: #ffffff;
        }


        /* -------button--------- */
        .form__button {
            display: block;
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

        .form__button span {
            font-size: 18px;
        }

        .main__link {
            text-decoration: none;
            color: #ffffff;
            display: block;
            width: fit-content;
            margin: 16px auto 0 auto;
        }
    </style>
    <title>おまだれ？</title>
</head>
<body>
<!-- header section -->
<header class="header">
    <div class="header__logo">
        <img src="/img/logo.png" alt="おまだれ？">
    </div>
    <div class="header__nav">
        <a href="{{  route('login')  }}"><i class="bi bi-list"></i></a>
    </div>
</header>
<main class="main">
    <!-- form section -->
    <form action="{{  route('user.store')  }}" class="form" method="post">
        <h2 class="form__section-title">新規登録</h2>
        @csrf
        <div class="name">
            <input type="text" name="name" class="name__input" placeholder="ユーザーネーム">
        </div>
        <div class="email">
            <input type="email" name="email" class="email__input" placeholder="メールアドレス">
        </div>
        <div class="password">
            <input type="password" name="password" class="password__input" placeholder="パスワード">
        </div>
        <!-- button -->
        <button class="form__button">
            <span>新規登録</span>
        </button>
    </form>
    <a href="{{ route('login') }}" class="main__link">ログイン</a>
</main>
</body>
</html>

