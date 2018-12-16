<?php

namespace App\Http\Controllers;

use App\NjsLookBookPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NjsLookBookPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('njslookbookpages')
            ->get();

        return view('njs_lookbook.njs_lookbook_page', ['scs' => $scs]);
    }

    public function create()
    {
        return view('njs_lookbook.create');
    }

    public function store(Request $request)
    {
        NjsLookBookPage::create($request->all());  //method 1 to return full table
        return redirect('/njs-look-book');
    }

    public function show(njsLookBookPage $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = NjsLookBookPage::findOrFail($id);
        return view('njs_lookbook.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = NjsLookBookPage::findOrFail($id);
        $sc->update($request->all());
        return redirect('/njs-look-book');
    }

    public function destroy(njsLookBookPage $njslookbookpage)
    {
        //
    }
}
