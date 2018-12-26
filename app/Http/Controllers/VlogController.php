<?php

namespace App\Http\Controllers;

use App\Vlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('vlogs')
            ->get();

        return view('vlogs.vlog', ['scs' => $scs]);
    }

    public function create()
    {
        return view('vlogs.create');
    }

    public function store(Request $request)
    {
        Vlog::create($request->all());  //method 1 to return full table
        return redirect('/vlogs');
    }

    public function show(Vlog $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = Vlog::findOrFail($id);
        return view('vlogs.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = Vlog::findOrFail($id);
        $sc->update($request->all());
        return redirect('/vlogs');
    }

    public function destroy(Vlog $njslookbookpage)
    {
        //
    }
}
