
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>おまだれ？</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/user_create_style.css">
</head>
<body>

    <header class="header wrap">
        <div class="header-inner">
            <a href="{{ route('prelogin') }}"><img src="/img/main_logo.jpg" alt="おまだれ？" width="174" height="72" class="main-logo"></a>
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
        <div class="form-container">
            <div class="form-inner">
                <form action="{{  route('user.store')  }}" method="post">
                    @csrf
                    <h4>新規登録して名前を覚えましょう！</h4>
                    <hr>
                    <div class="form-group input-box input-row">
                        <label for="name"><i class="bi bi-person"></i></label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="お名前をご入力ください">
                    </div>
                    <div class="form-group input-box input-row">
                        <label for="email"><i class="bi bi-envelope"></i></label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="メールアドレス">
                    </div>
                    <div class="form-group input-box input-row">
                        <label for="password"><i class="bi bi-bag-plus"></i></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="パスワード">
                    </div>
                    <div class="submit-button-container">
                        <button class="btn btn-primary submit-button">送信</button>
                    </div>
                </form>

{{--


後で消す


--}}
{{--                <form action="{{  route('user.index')  }}" mothod="post">--}}
{{--                    <button class="btn btn-primary"><a href="{{  route('user.index')  }}">名前を見る</a></button>--}}
{{--                    <button class="btn btn-primary">名前を見る</button>--}}
{{--                </form>--}}



            </div>
        </div>
    </div>

</body>

</html>
