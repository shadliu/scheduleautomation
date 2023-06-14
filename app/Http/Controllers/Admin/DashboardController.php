<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultant;
use App\Models\ContactFormSubmit;
use App\Models\Property;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index(){
        $data['users'] = User::count();
        $data['services'] = Service::count();
        $data['properties'] = Property::count();
        $data['visitor_quires'] = ContactFormSubmit::count();
        $data['consultant'] = Consultant::count();
        $data['active_property'] = Property::where('status', 1)->get()->count();
        return view('admin.dashboard', $data);
    }
}
