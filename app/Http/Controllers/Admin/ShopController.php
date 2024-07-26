<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\shop;
use App\Models\Shopgoods;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shop=Shopgoods::all();
        $category=Category::all();
        return view('shop.index',[
            'shop'=>$shop,
            'category'=>$category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        $shop=Shopgoods::all();
        return view('shop.create',[
            'shop'=>$shop,
            'category'=>$category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop=new Shopgoods();
        $shop->title=$request->title;
        $shop->category=$request->category;
        $shop->price=$request->price;
        $shop->new_price=$request->new_price;
        $shop->in_stock=$request->in_stock;
        $shop->content=$request->content;
        $shop->img='/'.$request->img;
        $shop->save();
        return redirect()->back()->with('success','New goods successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shopgoods $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopgoods $shop)
    {
        $category=Category::all();
        return view('shop.edit',[
            'shop'=>$shop,
            'category'=>$category,     
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shopgoods $shop)
    {
        $shop->title=$request->title;
        $shop->category=$request->category;
        $shop->price=$request->price;
        $shop->new_price=$request->new_price;
        $shop->in_stock=$request->in_stock;
        $shop->content=$request->content;
        $shop->img=$request->img;
        $shop->save();
        return redirect()->back()->with('success','New goods successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopgoods $shop)
    {
        $shop->delete();
        return redirect()->back()->with('success','New goods successfully delete');
    }
}
