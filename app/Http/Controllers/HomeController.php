<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //ログインユーザーを取得
        $user = Auth::user();
        //ログインユーザーに紐づくフォルダーを一つ取得する
        $folder = $user->folders()->first();

        //まだ一つもフォルダーがなければ/をレスポンスする
        if(is_null($folder)){
            return view('home');
        }
        //フォルダがあればそのフォルダのタスク一覧にリダイレクトする
        return redirect()->route('tasks.index',[
            'id' => $folder->id,
        ]);

        return view('home');
    }

    public function app()
    {
        return view('app');
    }
}
