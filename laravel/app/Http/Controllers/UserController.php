<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
//        dd($users);

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password'])
        ]);

        return redirect()->route('login');
    }

    public function edit(Request $request)
    {
        $user = User::find($request['id']);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = $user = User::find($request['id']);

        $user->name = $request['name'];
        $user->save();

        return redirect()->route('user.index');
    }

    public function delete(Request $request)
    {
        $user = User::find($request['id']);
        $user->delete();

        return redirect()->route('user.index');
    }
}
