<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\MultipleImage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['properties'] = Property::all();
        return view('admin.properties.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['property'] = Property::where('id', $id)->firstOrFail();
        return view('admin.properties.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::where('id', $id)->first()->delete();
        MultipleImage::where('property_id', $id)->delete();
        Notify::success('This Property Deleted', 'Deleted');
        return back();
    }

    public function pending()
    {
        $data['properties'] = Property::where('status', 2)->latest()->get();
        return view('admin.properties.pending', $data);
    }

    // Pending property Published
    public function published(Request $request, $id)
    {
        Property::where('id', $id)->update([
            'status' => $request->status,
        ]);
        Notify::success('Property Published', 'Successfully');
        return redirect(route('properties.index'));
    }


}
