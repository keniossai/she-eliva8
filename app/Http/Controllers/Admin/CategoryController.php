<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        // Upload Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/category'),$imageName);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->image = $imageName;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ]);

        $category = Category::where('id',$id)->first();
        // Upload Image
        if(isset($request->image)){
            //Image Upload
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/category'),$imageName);
            $category->image = $imageName;
        }

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->image = $imageName;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $category = Category::find($id);

        $image = public_path('storage/category/'.$category->image);
        if(file_exists($image))
        {
            unlink($image);
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
