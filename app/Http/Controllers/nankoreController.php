<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\nankore;
use App\Models\Folder;
use Illuminate\Validation\Rule;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateBook;
class nankoreController extends Controller
{
    public function listshow()
    {
        //とりあえず表示させる
        // $nankore = nankore::all();
        $nankore = Auth::user()->nankore()->get();
        //コピペ
        // $user = DB::table('users')->find($id);
        // $id = Auth::id();

        $auth = Auth::user();


        return view('nankore/listshow',[
            "nankores" => $nankore,
            // "user" => $auth,
        ]);
    }

    public function listCreateForm()
    {
        //ブックアイディーを出してあげる
        $list = Auth::user()->nankore()->get();
        return view('nankore/listcreate');
    }

    public function bookcreate(Createbook $request)
    {
        $current_user = Auth::id();

        $nankore = Auth::user()->nankore()->get();

        //新しいTask()を作る
        $book = new nankore();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->user_id = $current_user;
        $book->save();
        return redirect()->route('list.show',['id'=> $current_user]);
    }

}
