<?php

namespace App\Http\Controllers;

use App\LuxuryScarve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuxuryScarveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('luxury_scarves')
            ->get();

        return view('ls.luxury_scarves', ['scs' => $scs]);
    }

    public function create()
    {
        return view('ls.create');
    }

    public function store(Request $request)
    {
        LuxuryScarve::create($request->all());  //method 1 to return full table
        return redirect('/luxury-scarves');
    }

    public function show(LuxuryScarve $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = LuxuryScarve::findOrFail($id);
        return view('ls.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = LuxuryScarve::findOrFail($id);
        $sc->update($request->all());
        return redirect('/luxury-scarves');
    }

    public function destroy(LuxuryScarve $njslookbookpage)
    {
        //
    }
}
