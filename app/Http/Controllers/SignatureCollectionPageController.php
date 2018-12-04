<?php

namespace App\Http\Controllers;

use App\SignatureCollectionPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignatureCollectionPageController extends Controller
{
    public function index()
    {
        $scs = DB::table('signature_collection_page')
            ->get();

        return view('signature_collection.signature_collection_page', ['scs' => $scs]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        SignatureCollectionPage::index($request->all());
    }

    public function show(SignatureCollectionPage $signatureCollectionPage)
    {
        //
    }


    public function edit($id)
    {
        $sc = SignatureCollectionPage::findOrFail($id);
        return view('signature_collection.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = SignatureCollectionPage::findOrFail($id);
        $sc->update($request->all());
        return redirect('/signature-collection-page');
    }

    public function destroy(SignatureCollectionPage $signatureCollectionPage)
    {
        //
    }
}
