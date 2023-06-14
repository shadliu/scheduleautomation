<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewArrival;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NewArrivalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = NewArrival::where('status', 1)->get();
        return view('admin.new_arrivals.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_arrivals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required',
            'price' => 'required|integer',
            'return_policy' => 'required|integer',
            'description' => "required",
            'image' => 'required|image',
        ]);

        $services = NewArrival::create($request->except('_token', 'image') + [
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/' . $photo_name;

            Image::make($photo)->resize(380, 310)->save($location);
            NewArrival::find($services->id)->update([
                'image' => $photo_name,
            ]);
        }
        Notify::success('Created a new Medicine !', 'Success');
        return redirect()->route('newarrivals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_service'] = NewArrival::where('id', $id)->firstOrFail();
        return view('admin.new_arrivals.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['single_service'] = NewArrival::where('id', $id)->firstOrFail();
        return view('admin.new_arrivals.edit', $data);
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
        $request->validate([
            'medicine_name' => 'required',
            'price' => 'required|integer',
            'return_policy' => 'required|integer',
            'description' => "required",
            'image' => '',
        ]);

        $services = NewArrival::find($id);
        $input = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            if ($services->image) {
                unlink('assets/img/' . $services->image);
            }
            $photo = $request->file('image');
            $photo_name = time() . $request->id . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/' . $photo_name;

            Image::make($photo)->resize(380, 310)->save($location);
            $input['image'] = $photo_name;
        }

        $services->fill($input)->save();

        Notify::success('Medicine Updated Successfully!');
        return redirect()->route('newarrivals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewArrival::where('id', $id)->first()->delete();
        Notify::error('This Medicine Deleted', 'Deleted');
        return back();
    }
}
