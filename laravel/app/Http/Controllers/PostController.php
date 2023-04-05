<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        /*indexでnameを取得できないから試行錯誤した
        Attempt to read property "name" on null*/
//        $users = Auth::user();
//        dd($posts, $users);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        return view('post.create', compact('users'));
    }

    public function store(Request $request)
    {
        Post::create([
            'friend_name' => $request["friend_name"],
            'memo' => $request["memo"],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('post.index');
    }


//    edit画面のテキストボックス内に、Postsの内容を入れて編集できるようにするために、viewに$postsを渡してあげる
    public function edit(Request $request)
    {
        $posts =Post::find($request['id']);
        return view('post.edit', compact('posts'));
    }


    public function update(Request $request)
    {
        $post = Post::find($request['id']);

        $post->friend_name = $request['friend_name'];
        $post->memo = $request['memo'];
        $post->user_id = Auth::user()->id;
        $post->save();

        return redirect()->route('post.index');
    }



    public function delete(Request $request)
    {
        $user = User::find($request['id']);
        $user->delete();

        return redirect()->route('user.index');
    }



    public function createFromUser()
    {
        return view('post.createFromUser');
    }

    public function storeFromUser(Request $request)
    {
        Post::create([
            'friend_name' => $request["friend_name"],
            'memo' => $request['memo'],
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('post.index');
    }

}
