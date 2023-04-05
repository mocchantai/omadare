
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
    <link rel="stylesheet" href="/css/post_edit_style.css">
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
<main>
    <div class="main-container">
{{--        <div>{{ $posts->friend_name }}</div>--}}
        <div class="form-container">
            <div class="form-inner">
{{--                post.updateに飛ばすときは、postのidも持って行かないといけない--}}
{{--                $postsはpost.editに飛ばすためのPostコントローラーで定義されているもの--}}
                <form action="{{route('post.update',['id'=>$posts->id])}}" class="input-friend-name" method="post">
                    @csrf
                    <div class="form-group input-box input-row">
                        <input type="string" name="friend_name" class="form-control text-box" id="title" aria-describedby="emailHelp" value="{{  $posts->friend_name }}">
                        <p class="input-friend-name-right">さんは、</p>
                    </div>
                    <div class="form-group input-box input-row">
                        <textarea type="text" name="memo" class="form-control text-box" id="text" aria-describedby="emailHelp">{{  $posts->memo }}</textarea>
                    </div>
                    <div class="submit-button-container">
                        <button class="btn btn-primary submit-button">もっと覚えます</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</main>

</body>

</html>
