<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>現在{{Illuminate\Support\Facades\Auth::user()->name}}としてログインしています。</h2>
    <form action="{{  route('logout')  }}" method="post">
        <button>ログアウト</button>
    </form>
    <a href="{{route('user.create')}}">ユーザーcreate画面にうつる</a>
    <br>
    <a href="{{  route('post.create')  }}">投稿を作成する</a>
    <h1>User一覧</h1>
    @foreach($users as $user)
        <p>
            <a href="{{route('user.edit',['id'=>$user->id])}}">{{$user->name}}</a>
            <form action="{{route('user.delete',['id'=>$user->id])}}" method="post">
                @method('delete')
                @csrf
                <button>削除する</button>
            </form>
        </p>
    @endforeach
</body>
</html>
