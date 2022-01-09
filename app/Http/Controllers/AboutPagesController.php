<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\About;

class AboutPagesController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $abouts = About::all();
        return view('pages.abouts.list', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'img' => 'required|image',
            'description' => 'required|string',
        ]);
        $abouts = new About;
        $abouts->title1 = $request->title1;
        $abouts->title2 = $request->title2;
        $abouts->description = $request->description;

        $img_file = $request->file('img');
        Storage::putFile('public/img/', $img_file);
        $abouts->img = "storage/img/" . $img_file->hashName();

        $abouts->save();

        return redirect()->route('admin.abouts.create')->with('success', 'New About created successfully.');
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
        $about = About::find($id);
        return view('pages.abouts.edit', compact('about'));
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
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'description' => 'required|string',
        ]);
        $abouts =  About::find($id);
        $abouts->title1 = $request->title1;
        $abouts->title2 = $request->title2;
        $abouts->description = $request->description;

        if ($request->file('img')) {
            $img_file = $request->file('big_img');
            Storage::putFile('public/img/', $img_file);
            $abouts->img = "storage/img/" . $img_file->hashName();
        }

        $abouts->save();

        return redirect()->route('admin.abouts.list')->with('success', 'New About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        @unlink(public_path($about->img));
        $about->delete();

        return redirect()->route('admin.abouts.list')->with('success', 'About Deleted Successfully.');
    }
}
