
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
    <link rel="stylesheet" href="/css/post_create_style.css">
</head>
<body>

    <header class="header wrap">
        <div class="header-inner">
            <a href="{{ route('post.index') }}"><img src="/img/main_logo.jpg" alt="おまだれ？" width="174" height="72" class="main-logo"></a>
            <nav class="gnav">
                <ul class="gnav-list">
                    <a href="{{ route('post.index') }} " id="login-button" class="button"><i class="bi bi-person nav-icon"></i>名前を見る</a>
                    <a href="{{ route('logout') }}" id="register-button" class="button"><i class="bi bi-emoji-sunglasses nav-icon">ログアウト</i></a>

{{--                    <a href="{{ route('user.create') }}" id="register-button" class="button">新規登録</a>--}}
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-container">
            <div class="form-container">
                <div class="form-inner">
                    <form action="{{  route('post.store')  }}" class="input-friend-name" method="post">
                        @csrf
                        <div class="form-group input-box input-row">
                            <label for="friend_name" class="input-friend-name-left">目の前にいるのは、</label>
                            <input type="string" name="friend_name" class="form-control input-friend-name-left" id="title" aria-describedby="emailHelp" placeholder="お名前をご入力ください">
                            <p class="input-friend-name-right">です。</p>
                        </div>
                        <div class="submit-button-container">
                            <button class="btn btn-primary submit-button">覚える</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </main>

</body>

</html>
