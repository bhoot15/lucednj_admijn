<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('lucednj_uploads')
            ->get();

        return view('image.image_page', ['scs' => $scs]);
    }

    public function create()
    {
        //return view('image.create');
    }

    public function store(Request $request)
    {
        Image::create($request->all());  //method 1 to return full table
        return redirect('/images');
    }

    public function show(Image $njslookbookpage)
    {
        //
    }

    public function edit($id)
    {
        $sc = Image::findOrFail($id);
        return view('image.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = Image::findOrFail($id);
        $sc->update($request->all());
        return redirect('/images');
    }

    public function destroy(Image $njslookbookpage)
    {
        //
    }
}
