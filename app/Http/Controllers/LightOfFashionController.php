<?php

namespace App\Http\Controllers;

use App\LightOfFashion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LightOfFashionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('light_of_fashions')
            ->get();

        return view('lofs.lof', ['scs' => $scs]);
    }

    public function create()
    {
        return view('lofs.create');
    }

    public function store(Request $request)
    {
        LightOfFashion::create($request->all());  //method 1 to return full table
        return redirect('/lofs');
    }

    public function show(LightOfFashion $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = LightOfFashion::findOrFail($id);
        return view('lofs.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = LightOfFashion::findOrFail($id);
        $sc->update($request->all());
        return redirect('/lofs');
    }

    public function destroy(LightOfFashion $njslookbookpage)
    {
        //
    }
}
