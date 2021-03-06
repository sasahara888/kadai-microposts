<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション
     * 
     * @param  $id  投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りにする
        \Auth::user()->favorite($id);
        // 前のURLにリダイレクト
        return back();
    }
    
    /**
     * 投稿のお気に入りを外すアクション
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、idの投稿をお気に入りから外す
        \Auth::user()->unfavorite($id);
        // 前のURLにリダイレクト
        return back();
    }
}
