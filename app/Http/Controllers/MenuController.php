<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::
        orderBy('category_id')
        ->get();

        $categories=Category::where('active', 1)
        ->with(['menus'])
        ->get();
        // dd($categoies);
        return view('menus.menu',compact('menus', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
        ]);
        //dd($validated);
        $image_path = $this->upload($request);
        //dd($image_path);
        
        $validated['image']= $image_path;
        //dd($validated);
        Menu::create($validated);
        return redirect()->route('mada.menus.index')

            ->with('success','menus created successfully.');
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
    public function upload($request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            // Perform any additional logic with the uploaded picture here

            return 'uploads/'. $fileName;
        }

        return "No picture found.";
    }
    
}
