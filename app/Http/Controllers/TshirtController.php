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
        //how to order tshirts by id?
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
        // not liking svg test image
        $request->validate([
            'name' => 'required',
            'bkg_colour' => 'required',
            'country_purchased' => 'required',
            'image'=>'required|image|mimes:jpeg, png, jpg, gif, svg|max:2048'
        ]);
        // atm image is ruiqred otehrwise get msg abotu nto hviang default value - 
        // SQLSTATE[HY000]: General error: 1364 Field 'image' doesn't have a default value (SQL: insert into `tshirts` (`name`, `bkg_colour`, `country_purchased`, `updated_at`, `created_at`) values (sdfsdf, asdfsadf, asfsdf, 2021-12-07 21:13:54, 2021-12-07 21:13:54))

        //original code, before image uploader
        // Tshirt::create($request->all());

        $input = $request->all();
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = "tshirt_" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Tshirt::create($input);

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
        //orignal, before adding image uploader
        // $tshirt->update($request->all());

        $input = $request->all();
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $input['image'] = "$postImage";
        }
        else {
            unset($input['image']);
        }
        $tshirt->update($input);

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
        //how to soft delete? delete works ok without a form - soft deletion happens by itself, as the Tshirt Model (and the db migration file) uses the SoftDelete class/feature - but how to reverse a soft delete, and where to see that as an enduser?
        $tshirt->delete();

        return redirect()->route('tshirts.index')
            ->with('success', 'Tshirt deleted successfully from collection');
    }
}
// My Custom DB Fields
    // $table->id();
    // $table->string('name', 255);
    // $table->string('bkg_colour', 50)->nullable();
    // //put country in separate ref table later
    // $table->string('country_purchased', 255)->nullable();
    // $table->timestamp('created_at')->useCurrent();
    // $table->timestamp('updated_at')->nullable();

// NEW DB Fields
// $table->string('image');
// $table->softDeletes('deleted_at');

