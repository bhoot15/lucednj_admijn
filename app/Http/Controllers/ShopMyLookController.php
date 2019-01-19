<?php

namespace App\Http\Controllers;

use App\ShopMyLook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopMyLookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('shop_my_look')
            ->get();

        return view('shop_my_look.shop_my_look_page', ['scs' => $scs]);
    }

    public function create()
    {
        return view('shop_my_look.create');
    }

    public function store(Request $request)
    {
        ShopMyLook::create($request->all());  //method 1 to return full table
        return redirect('/shop-my-look');
    }

    public function show(ShopMyLook $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = ShopMyLook::findOrFail($id);
        return view('shop_my_look.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = ShopMyLook::findOrFail($id);
        $sc->update($request->all());
        return redirect('/shop-my-look');
    }

    public function destroy(ShopMyLook $njslookbookpage)
    {
        //
    }
}
