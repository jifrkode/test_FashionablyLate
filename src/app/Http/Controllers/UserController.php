<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        // return view('index', ['authors' => $authors]);
        return view('index');
    }

    //ユーザー登録
    public function add()
    {
        // return view('index', ['authors' => $authors]);
        return view('register');
    }
    public function create(UserRequest $request)
    {
        // バリデーション済みデータを取得
        $validated = $request->validated();

        // パスワードをハッシュ化
        $validated['password'] = Hash::make($validated['password']);

        // ユーザー作成
        User::create($validated);

        return redirect('admin'); // 登録後のリダイレクト先
    }

    public function admin()
    {
        return view('admin');
    }
    // public function login(UserRequest $request)
    // {
    //     $data = $request->all();

    //     //login処理

    //     // 処理後のリダイレクト先
    //     return view('admin');
    // }

    public function confirm()
    {
        // return view('index', ['authors' => $authors]);
        // return view('contact/thanks');
    }
    public function thanks()
    {
        // return view('index', ['authors' => $authors]);
        return view('/thanks');
    }
}
