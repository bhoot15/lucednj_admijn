<?php

namespace App\Http\Controllers;

use App\WorkWithUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkWithUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $scs = DB::table('work_with_us')
            ->get();

        return view('work_with_us.work_with_us', ['scs' => $scs]);
    }


    public function create()
    {
        //return view('work_with_us.work_with_us');
    }

    public function store(Request $request)
    {
        WorkWithUs::create($request->all());  //method 1 to return full table
        return redirect('/work-with-us');
    }

    public function show(WorkWithUs $aboutUs)
    {
        //
    }

    public function edit($id)
    {
        $sc = WorkWithUs::findOrFail($id);
        return view('work_with_us.edit', compact('sc'));
    }

    public function update(Request $request, $id)
    {
        $sc = WorkWithUs::findOrFail($id);
        $sc->update($request->all());
        return redirect('/work-with-us');
    }

    public function destroy(WorkWithUs $aboutUs)
    {
        //
    }
}
