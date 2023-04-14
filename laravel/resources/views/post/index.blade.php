<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="post_index_style.css">
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
            margin: 0 auto;
            margin-bottom: 32px;
            width: 280px;
            height: 60px;
            background-color: #ffffff;
            display: flex;
            border-radius: 100px;
            position: relative;
        }

        .switch__button--left a {
            text-align: center;
            color: #ffffff;
            text-decoration: none;
            width: 140px;
            height: 56px;
            border-radius: 100px;
            background-color: #F59084;
            position: absolute; /* switchに対して、相対位置にする */
            top: 2px;
            left: 2px;
            display: inline-block; /* inline-blockにする */
            text-align: center; /* 横方向中央ぞろえにする */
            line-height: 56px; /* 縦方向中央ぞろえにする */
            vertical-align: middle; /* 縦方向中央ぞろえにする */
        }

        .switch__button--right a {
            text-align: center;
            color: #909090;
            text-decoration: none;
            width: 140px;
            height: 56px;
            border-radius: 100px;
            position: absolute; /* switchに対して、相対位置にする */
            top: 2px;
            right: 2px;
            display: inline-block; /* inline-blockにする */
            text-align: center; /* 横方向中央ぞろえにする */
            line-height: 56px; /* 縦方向中央ぞろえにする */
            vertical-align: middle; /* 縦方向中央ぞろえにする */
        }


        /* ---list section--- */
        .name-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .name-card {
            width: 358px;
            height: 100px;
            border-radius: 12px;
            background-color: #ffffff;
            opacity: 0.6;
            margin-bottom: 4px;
        }

        .name-card:hover {
            width: 358px;
            height: 100px;
            border-radius: 12px;
            background-color: #ffffff;
            opacity: 0.9;
            margin-bottom: 4px;
        }

        .name-card__name {
            padding: 4px 8px;
            font-size: 18px;
        }

        .name-card__memo {
            padding: 0 8px;
            font-size: 12px;
        }
    </style>
    <title>OmadareUI</title>
</head>
<body>
<header class="header">
    <div class="header__logo">
        <img src="img/logo.png" alt="おまだれ？">
    </div>
    <div class="header__nav">
        <a href="{{ route('post.index') }}"><i class="bi bi-list"></i></a>
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
    <!-- list section -->
    <div class="name-list">
        @foreach($posts as $post)
            @if( $post->user_id == Auth::user()->id )
                <div class="name-card" onclick="window.location.href='{{ route('post.edit', ['id' => $post->id] ) }}'">
                    <div class="name-card__name">
                        <p>{{  $post->friend_name  }}</p>
                    </div>
                    <div class="name-card__memo">
                        <p>{{  $post->memo  }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</main>
</body>
</html>
