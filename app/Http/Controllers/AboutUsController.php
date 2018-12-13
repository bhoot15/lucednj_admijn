<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{

    public function index()
    {
        $scs = DB::table('about_us')
            ->get();

        return view('about_us.about_us', ['scs' => $scs]);
    }


    public function create()
    {
        //return view('about_us.about_us');
    }

    public function store(Request $request)
    {
        AboutUs::create($request->all());  //method 1 to return full table
        return redirect('/about-us');
    }

    public function show(AboutUs $aboutUs)
    {
        //
    }

    public function edit($id)
    {
        $sc = AboutUs::findOrFail($id);
        return view('about_us.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = AboutUs::findOrFail($id);
        $sc->update($request->all());
        return redirect('/about-us');
    }

    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
