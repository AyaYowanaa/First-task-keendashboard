<?php

namespace App\Http\Controllers;

use App\Models\SetEcomerce;
use Illuminate\Http\Request;

class SetEcomerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pro=new SetEcomerce();
        $pro->category_name=$request->category_name;
        $pro->description=$request->description;
    
        $pro->save();
    return redirect()->route('ecomerce.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SetEcomerce  $setEcomerce
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $pro=SetEcomerce::all();
        return view('show-pro');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SetEcomerce  $setEcomerce
     * @return \Illuminate\Http\Response
     */
    public function edit(SetEcomerce $setEcomerce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SetEcomerce  $setEcomerce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SetEcomerce $setEcomerce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SetEcomerce  $setEcomerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(SetEcomerce $setEcomerce)
    {
        //
    }
}
