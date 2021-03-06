<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    //商品入力
    public function create()
    {
        return view('admin.item.create');
    }

    //商品追加  
    public function add(Request $request)
    {
        $posts = $request ->all();
        Item::create($posts);
        //商品一覧にリダイレクト
        return redirect('/admin/item/');
    }
}
