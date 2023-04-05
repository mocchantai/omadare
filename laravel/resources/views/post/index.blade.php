<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/post_index_style.css">
</head>
<body>
    <header class="header wrap">
        <div class="header-inner">
            <a href="{{ route('post.index') }}"><img src="/img/main_logo.jpg" alt="おまだれ？" width="174" height="72" class="main-logo"></a>
            <nav class="gnav">
                <ul class="gnav-list">
                    <a href="{{ route('post.create') }} " id="login-button" class="button">
                        <i class="bi bi-person-plus nav-icon"></i>
                        <span>名前を追加</span>
                    </a>
                    <a href="{{ route('logout') }}" id="register-button" class="button">
                        <i class="bi bi-emoji-sunglasses nav-icon"></i>
                        <span>ログアウト</span>
                    </a>
                </ul>
            </nav>
        </div>
        <hr>
    </header>


    <div class="table-container">
        <table class="table table-hover .table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">日時</th>
            <th scope="col">名前</th>
            <th scope="col">メモ</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            @if( $post->user_id == Auth::user()->id )
{{--                テーブルの行をクリックすると、postの編集画面に飛ばしたい。--}}
{{--                ここやばいな、routeでpost.editに行くときは、idをセットで持って行かないといけない。--}}
                    <tr onclick="window.location.href='{{ route('post.edit', ['id' => $post->id] ) }}'">
{{--                    <tr>--}}
                        <th scope="row">{{  $post->user_id }}</th>
                        <td>{{  $post->created_at  }}</td>
                        <td>{{  $post->friend_name  }}</td>
                        <td>{{  $post->memo  }}</td>
                    </tr>

            @endif
        @endforeach
        </tbody>
    </table>
    </div>


</body>
</html>
