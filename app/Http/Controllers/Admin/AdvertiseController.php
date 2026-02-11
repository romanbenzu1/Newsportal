<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertises = Advertise::orderBy('id', 'desc')->get();
        return view('admin.advertise.index', compact('advertises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advertise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "company_name" => "required|max:255",
            "redirect_url" => "required|max:255",
            "image" => "required|image|mimes:jpg,jpeg,png,svg,gif,webp,avif|max:1024",
            "contact" => "required",
            "expire_date" => "required|date",
            "ad_position" => "required",
        ]);

        $advertise = new Advertise();
        $advertise->company_name = $request->company_name;
        $advertise->redirect_url = $request->redirect_url;
        $advertise->contact = $request->contact;
        $advertise->ad_position = $request->ad_position;
        $advertise->expire_date = $request->expire_date;

        if ($request->image) {
            $advertise->image = upload_image($request->image);
        }
        $advertise->save();

        toast("Advertise created successfully", "success");
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
 * Show the form for editing the specified resource.
 */
    public function edit(string $id)
    {
        $advertise = Advertise::findOrFail($id);
        return view('admin.advertise.edit', compact('advertise'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $advertise = Advertise::findOrFail($id);
    
        $request->validate([
            "company_name" => "required|max:255",
            "redirect_url" => "required|max:255",
            "image" => "nullable|image|mimes:jpg,jpeg,png,svg,gif,webp,avif|max:1024",
            "contact" => "required",
            "expire_date" => "required|date",
            "ad_position" => "required",
        ]);
    
        $advertise->company_name = $request->company_name;
        $advertise->redirect_url = $request->redirect_url;
        $advertise->contact = $request->contact;
        $advertise->ad_position = $request->ad_position;
        $advertise->expire_date = $request->expire_date;
    
        if ($request->hasFile('image')) {
            $advertise->image = upload_image($request->image);
        }
    
        $advertise->save();
    
        toast("Advertise updated successfully", "success");
        return redirect()->route('admin.advertise.index');
    }

    
   
    public function destroy(string $id)
    {
        $advertise =Advertise::find($id);
        $advertise->delete();
        toast("Article updated successfully", "success");
        return redirect()->back();

        //
    }
}
