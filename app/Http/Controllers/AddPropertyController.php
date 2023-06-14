<?php

namespace App\Http\Controllers;

use App\Models\MultipleImage;
use App\Models\Property;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AddPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('done_btn');
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
        $request->validate([
            'category_id' => 'required',
            'property_name' => 'required',
            'address_divission' => 'required',
            'address_city' => 'required',
            'address' => 'required',
            'beds' => 'required',
            'bathroom' => 'required',
            'squire_feet' => 'required',
            'monthly_amount' => 'required',
            'land_area' => '',
            'kitchen' => 'required',
            'garage' => 'required',
            'garage_size' => 'required',
            'security_deposit' => '',
            'building_age' => '',
            'property_purpose' => '',
            'interior' => 'required',
            'service_charge' => 'required',
            'take_rent' => '',
            'gas' => 'required',
            'registration_type' => '',
            'registration_number' => '',
            'servent_room' => '',
            'servent_washroom' => '',
            'unit_per_floor' => '',
            'front_road_size' => '',
            'building_facing' => '',
            'vacant_since' => '',
            'get_closing_time' => 'required',
            'any_special_think' => '',
            'image' => 'required',
            // 'multiple_iamges' => 'required',
        ]);


        $properties = Property::create($request->except('_token', 'image', 'status', 'multiple_iamges[]') + [
            'user_id' => Auth::user()->id,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . $properties->id . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/property/' . $photo_name;
            Image::make($photo)->resize(320, 240)->save($location);
            Property::find($properties->id)->update([
                'image' => $photo_name,
                'status' => 2,
            ]);
        }

        if ($request->hasFile('multiple_iamges')) {
            $flag = 1;
            foreach ($request->file('multiple_iamges') as $single_photo) {
                $uploaded_photo = $single_photo;
                $photo_name = $properties->id . '-' . $flag++ . "." . $uploaded_photo->getClientOriginalExtension();
                $new_photo_location = 'assets/img/property/' . $photo_name;
                Image::make($uploaded_photo)->resize(320, 240)->save($new_photo_location);
                MultipleImage::create([
                    'property_id' => $properties->id,
                    'multiple_iamges' => $photo_name,
                ]);
                if ($flag == 8) {
                    break;
                }
            }
        }
        Notify::success('Created Your New Property !', 'Success');
        return redirect('done/btn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
