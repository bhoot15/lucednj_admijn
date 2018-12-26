<?php

namespace App\Http\Controllers;

use App\HomeNjsLookBookPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeNjsLookBookPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('home_njslookbookpages')
            ->get();

        return view('home_njs_lookbook.njs_lookbook_page', ['scs' => $scs]);
    }

    public function create()
    {
        return view('home_njs_lookbook.create');
    }

    public function store(Request $request)
    {
        HomeNjsLookBookPage::create($request->all());  //method 1 to return full table
        return redirect('/home-njs-look-book');
    }

    public function show(HomeNjsLookBookPage $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = HomeNjsLookBookPage::findOrFail($id);
        return view('home_njs_lookbook.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = HomeNjsLookBookPage::findOrFail($id);
        $sc->update($request->all());
        return redirect('/home-njs-look-book');
    }

    public function destroy(HomeNjsLookBookPage $njslookbookpage)
    {
        //
    }
}
