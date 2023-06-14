<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Plusemon\Notify\Facades\Notify;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blogs-category.index', compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.blogs-category.create');
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
            'name' => ['required', 'string', 'min:3', 'max:30', 'unique:blog_categories'],
            'ar_name' => ['nullable', 'string', 'min:3', 'max:255', 'unique:blog_categories'],
        ]);
        BlogCategory::create($request->except('_token'));
        Notify::success('' . $request->name . ' Category created', 'Success');
        return redirect('blogcategories');
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
        $blogcategory = BlogCategory::find($id);
        return view('admin.blogs.blogs-category.edit', compact('blogcategory'));
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
            'name' => ['required', 'string', 'min:3', 'max:60', 'unique:blog_categories'],
            'ar_name' => ['nullable', 'string', 'min:3', 'max:255', 'unique:blog_categories'],
        ]);
        $blogcategory = BlogCategory::find($id);
        $blogcategory->name = $request->name;
        $blogcategory->ar_name = $request->ar_name;
        $blogcategory->save();
        Notify::success('' . $blogcategory->name . ' Category updated', 'Updated');
        return redirect('blogcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogcategory)
    {
        $blogcategory->delete();
        Notify::info('Successfully Deleted', 'Deleted');
        return back();
    }
}
