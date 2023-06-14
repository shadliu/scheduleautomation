<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Service::where('status', 1)->get();
        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.services.create', $data);
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
            'price' => '',
            'return_policy' => '',
            'description' => "",
            'image' => 'required|image',
        ]);

        $services = Service::create($request->except('_token', 'image') + [
            'user_id' => Auth::user()->id,
            'status' => 1,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/' . $photo_name;

            Image::make($photo)->resize(380, 310)->save($location);
            Service::find($services->id)->update([
                'image' => $photo_name,
            ]);
        }
        Notify::success('Created a new Medicine !', 'Success');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_service'] = Service::where('id', $id)->firstOrFail();
        return view('admin.services.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['single_service'] = Service::where('id', $id)->firstOrFail();
        return view('admin.services.edit', $data);
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
            'category_id' => 'required',
            'medicine_name' => 'required',
            'price' => '',
            'return_policy' => '',
            'description' => "",
            'image' => '',
        ]);

        $services = Service::find($id);
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
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->first()->delete();
        Notify::error('This Medicine Deleted', 'Deleted');
        return back();
    }
}
