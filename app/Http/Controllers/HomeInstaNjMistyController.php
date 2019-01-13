<?php

namespace App\Http\Controllers;

use App\HomeInstaNjMisty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeInstaNjMistyController extends Controller
{
    public function index()
    {
        $scs = DB::table('home_insta_nj_misty')
            ->get();

        return view('home_insta_nj_misty.home_insta_nj_misty', ['scs' => $scs]);
    }


    public function create()
    {
        //return view('home_insta_nj_misty.about_us');
    }

    public function store(Request $request)
    {
        HomeInstaNjMisty::create($request->all());  //method 1 to return full table
        return redirect('/home-insta-nj-misty');
    }

    public function show(HomeInstaNjMisty $aboutUs)
    {
        //
    }

    public function edit($id)
    {
        $sc = HomeInstaNjMisty::findOrFail($id);
        return view('home_insta_nj_misty.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = HomeInstaNjMisty::findOrFail($id);
        $sc->update($request->all());
        return redirect('/home-insta-nj-misty');
    }

    public function destroy(HomeInstaNjMisty $aboutUs)
    {
        //
    }
}
