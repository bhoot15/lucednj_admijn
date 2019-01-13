<?php

namespace App\Http\Controllers;

use App\LessIsMore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessIsMoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('less_is_more')
            ->get();

        return view('lem.less_is_more', ['scs' => $scs]);
    }

    public function create()
    {
        return view('lem.create');
    }

    public function store(Request $request)
    {
        LessIsMore::create($request->all());  //method 1 to return full table
        return redirect('/less-is-more');
    }

    public function show(LessIsMore $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = LessIsMore::findOrFail($id);
        return view('lem.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = LessIsMore::findOrFail($id);
        $sc->update($request->all());
        return redirect('/less-is-more');
    }

    public function destroy(LessIsMore $njslookbookpage)
    {
        //
    }
}
