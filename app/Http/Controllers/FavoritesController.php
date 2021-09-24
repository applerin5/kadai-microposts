<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
     public function store($micropost_id)
    {
        \Auth::user()->favorite($micropost_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($micropost_id)
    {
        \Auth::user()->unfavorite($micropost_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
