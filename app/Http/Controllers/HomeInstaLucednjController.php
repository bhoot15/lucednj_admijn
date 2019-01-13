<?php

namespace App\Http\Controllers;

use App\HomeInstaLucednj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeInstaLucednjController extends Controller
{
    public function index()
    {
        $scs = DB::table('home_insta_lucednj')
            ->get();

        return view('home_insta_lucednj.home_insta_lucednj', ['scs' => $scs]);
    }


    public function create()
    {
        //return view('home_insta_lucednj.about_us');
    }

    public function store(Request $request)
    {
        HomeInstaLucednj::create($request->all());  //method 1 to return full table
        return redirect('/home-insta-lucednj');
    }

    public function show(HomeInstaLucednj $aboutUs)
    {
        //
    }

    public function edit($id)
    {
        $sc = HomeInstaLucednj::findOrFail($id);
        return view('home_insta_lucednj.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = HomeInstaLucednj::findOrFail($id);
        $sc->update($request->all());
        return redirect('/home-insta-lucednj');
    }

    public function destroy(HomeInstaLucednj $aboutUs)
    {
        //
    }
}
