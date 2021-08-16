<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Auth;


class FolderController extends Controller
{
    //タスクを見せる
    public function showCreateForm(){
        return view('folders/create');
    }
    public function create(CreateFolder $request){
        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // titleに入力値を代入する
        $folder->title = $request->title;
        // 
        // $folder->save();
        Auth::user()->folders()->save($folder);

        return redirect()->route('tasks.index',[
            'id' => $folder->id,
        ]);
    }
}
