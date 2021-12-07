<?php

namespace App\Http\Controllers;

use App\Models\Tshirt;
use Illuminate\Http\Request;

class TshirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tshirts = Tshirt::latest()->paginate(5);

        return view('tshirts.index', compact('tshirts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tshirts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //maybe this only needs to validate the mandatory 'fillable' fields?
        $request->validate([
            'name' => 'required',
            'bkg_colour' => 'required',
            'country_purchased' => 'required'
        ]);

        Tshirt::create($request->all());

        return redirect()->route('tshirts.index')
            ->with('success', 'New Tshirt created and added to collection successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tshirt  $tshirt
     * @return \Illuminate\Http\Response
     */
    public function show(Tshirt $tshirt)
    {
        return view('tshirts.show', compact('tshirt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tshirt  $tshirt
     * @return \Illuminate\Http\Response
     */
    public function edit(Tshirt $tshirt)
    {
        return view('tshirts.edit', compact('tshirt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tshirt  $tshirt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tshirt $tshirt)
    {
        $request->validate([
            'name' => 'required',
            'bkg_colour' => 'required',
            'country_purchased' => 'required'
        ]);
        $tshirt->update($request->all());

        return redirect()->route('tshirts.index')
            ->with('success', 'Tshirt details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tshirt  $tshirt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tshirt $tshirt)
    {
        //how to soft delete?
        $tshirt->delete();

        return redirect()->route('tshirts.index')
            ->with('success', 'Tshirt deleted successfully from collection');
    }
}
