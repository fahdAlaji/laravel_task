<?php

namespace App\Http\Controllers;

use App\Models\Prodact\Prodact;
use Illuminate\Http\Request;

class ProdactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro=Prodact::all();
        return view('index',compact('$pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(["name"=>'required',"price"=>'required']);
        $pro=Prodact::create($request->all());
        return redirect()->route('index')->with('success','successful add');
    }

    /**
     * Display the specified resource.
     */
/*    public function show(Prodact $prodact)
    {
        return view('show',compact('pro'));
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(Prodact $prodact)
    {
        return view('edit',compact('pro'));
    }*/

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, Prodact $prodact)
    {
        $request->validate(["name"=>'required',"price"=>'required']);        
        $pro=Prodact::create($request->all());
        return redirect()->route('index')->with('success','successful updated');
    }*/

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(Prodact $prodact)
    {
        $prodact->delete();
        return redirect()->route('index')->with('success','successful delete');
    }*/
}
