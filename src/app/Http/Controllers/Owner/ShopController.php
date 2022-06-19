<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function ($request, $next) {
           $id = $request->route()->parameter('shop'); // indexに接続するとnullが返ってくる
            if (!is_null($id)) {// null判定 
                $shopsOwnerId = Shop::findOrFail($id)->owner->id;
                $shopId = (int)$shopsOwnerId; // 文字列->数値に型変換
                $ownerId = Auth::id();
                if ($shopId !== $ownerId) {
                    abort(404);
                }
            } 
            return $next($request);
        });
    }

    public function index()
    {
        // ログインしているOwnerId取得
        $shops = Shop::where('owner_id', Auth::id())->get();

        return view('owner.shops.index', 
        compact('shops'));
    }

    public function edit($id)
    {
        dd(Shop::findOrFail($id));
    }

    public function update(Request $request, $id)
    {}

}
