
{{--<!doctype html>--}}
{{--<html lang="ja">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>おまだれ？</title>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="/css/login_style.css">--}}
{{--</head>--}}
{{--<body>--}}

{{--<header class="header wrap">--}}
{{--    <div class="header-inner">--}}
{{--        <img src="/img/main_logo.jpg" alt="おまだれ？" width="174" height="72" class="main-logo">--}}
{{--        <nav class="gnav">--}}
{{--            <ul class="gnav-list">--}}
{{--                <a href="{{ route('login') }} " id="login-button" class="button">ログイン</a>--}}
{{--                <a href="{{ route('user.create') }}" id="register-button" class="button">登録</a>--}}
{{--            </ul>--}}
{{--        </nav>--}}
{{--    </div>--}}
{{--</header>--}}
{{--<div class="hero">--}}

{{--    <img src="/img/top.jpg" alt="Top画像" >--}}
{{--    <div class="form-container">--}}
{{--        <div class="form-inner">--}}
{{--            <form action="{{  route('login.post')  }}" method="post">--}}
{{--                @csrf--}}
{{--                <h4>おかえりなさい</h4>--}}
{{--                <hr>--}}
{{--                <div class="form-group input-box input-row">--}}
{{--                    <label for="email"><i class="bi bi-envelope"></i></label>--}}
{{--                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="メールアドレス">--}}
{{--                </div>--}}
{{--                <div class="form-group input-box input-row">--}}
{{--                    <label for="password"><i class="bi bi-bag-plus"></i></label>--}}
{{--                    <input type="password" name="password" class="form-control" id="password" placeholder="パスワード">--}}
{{--                </div>--}}
{{--                <div class="submit-button-container">--}}
{{--                    <button class="btn btn-primary submit-button">送信</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login_style.css">
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

        .user-name, .email, .password {
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
        <img src="img/logo.png" alt="おまだれ？">
    </div>
    <div class="header__nav">
        <a href=""><i class="bi bi-list"></i></a>
    </div>
</header>
<main class="main">
    <!-- form section -->
    <form action="{{  route('login.post')  }}" class="form" method="post">
        <h2 class="form__section-title">ログイン</h2>
        @csrf
        <div class="email">
            <input type="email" name="email" class="email__input" placeholder="メールアドレス">
        </div>
        <div class="password">
            <input type="password" name="password" class="password__input" placeholder="パスワード">
        </div>
        <!-- button -->
        <button class="form__button">
            <span>ログイン</span>
        </button>
    </form>
    <a href="{{ route('user.create') }}" class="main__link">新規登録</a>
</main>
</body>
</html>
