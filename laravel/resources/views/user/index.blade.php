<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー一覧</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/user_index_style.css">

</head>
<body>
    <header class="header_section">
        <img src="/img/main_logo.jpg" alt="ロゴ" width="174" height="72">
        <div>{{Illuminate\Support\Facades\Auth::user()->name}}</div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('user.create')}}">登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{  route('post.create')  }}">名前を追加</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.index') }}">名前を見る</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{  route('logout')  }}">ログアウト</a>
            </li>
        </ul>
    </header>
    <h1>User一覧</h1>
    <main class="user_card">
        @foreach($users as $user)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ユーザー名：{{$user->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">登録日時：{{$user->created_at}}</h6>
                    <div class="buttons">
{{--                        <div class="edit_button">--}}
{{--                            <a href="{{ route('user.edit',['id'=>$user->id]) }}" class="card-link">編集</a>--}}
{{--                        </div>--}}
                        <div class="delete_button">
                            <form action="{{ route('user.edit',['id'=>$user->id]) }}" method="get">
                                @csrf
                                <button class="btn btn-link">編集</button>
                            </form>
                        </div>
                        <div class="delete_button">
                            <form action="{{route('user.delete',['id'=>$user->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-link">削除</button>
                            </form>
                        </div>

                    </div>


                </div>
            </div>
        @endforeach
    </main>
</body>
</html>
