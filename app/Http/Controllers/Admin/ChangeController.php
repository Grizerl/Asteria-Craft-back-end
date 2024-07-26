<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Changelog;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $change=Changelog::all();
        return view('changelos.index',[
            'change'=>$change,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('changelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $change= new Changelog();
        $change->title=$request->title;
        $change->content=$request->content;
        $change->save();
        return redirect()->back()->with('success','New changes successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Changelog $changelog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Changelog $change)
    {
       
        return view('changelos.edit',[
            'change'=>$change,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Changelog $change)
    {
        $change->title=$request->title;
        $change->content=$request->content;
        $change->save();
        return redirect()->back()->with('success','New changes successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Changelog $change)
    {
        $change->delete();
        return redirect()->back()->with('success','New changes successfully delete');
    }
}
