<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court;
use App\Models\User;

class CourtController extends Controller
{
    public function list()
    {

        $data = Court::get();
        // return "court";
        return view('vendor.vendor', compact('data'));
    }

    public function create()
    {
        return view('register-court');
    }

    // public function store(Request $request)


    // {


    //     // $path = $request->file('image')->store('public');
    //     // $fileName = $request->file('file')->store('public');
    //     // $fileName = $fileNameArray[1];
    //     // $menupath = $request->file('menu-img')->store('public');
    //     // $request->merge(['image' => $path]);



    //     $path = $request->file('image')->store('images', 'public');
    //     $pathArray = explode('/', $path);
    //     $imgPath = $pathArray[1];
    //     $image = new Court();
    //     $image->image = $imgPath;
    //     $image->save();
    //     court::create($request->all());
    //     return redirect()->route('vendor')->with('success', 'Court created successfully.');
        
    //     //$foodCourtImagePath = $request->file('image')->store('images', 'public');
    //     // if ($request->hasFile('image')) {
    //     // }

    //     // Handle the menu image




    // }

    



    public function store(Request $request)
{
    // // Validate the request
    // $request->validate([
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     // Add other validation rules for fields if necessary
    //     'name' => 'required|string|max:255', // Example for other fields
    // ]);

    // Handle the image upload
    if ($file = $request->file('image')) {
        $path = $file->store('images', 'public');
        $pathArray = explode('/', $path);
        $imgPath = $pathArray[1]; // This gives just the filename (e.g., "file.jpg")
    } else {
        return back()->withErrors(['image' => 'Failed to upload the image.']);
    }

    // Save the data to the database
    $court = new Court();
    $court->court_name = $request->input('court_name'); // Assign other fields explicitly
    $court->vendor_id = auth()->user()->id; // Assuming you have a "vendor_id" field in your Court model
    $court->address = $request->input('address');
    $court->contact = $request->input('contact');
    $court->email = $request->input('email');
    $court->food_type = $request->input('food_type');
    $court->open_time = $request->input('open_time');
    $court->close_time = $request->input('close_time');
    
    $court->image = $imgPath;
    $court->save();

    // Redirect with success message
    return redirect()->route('vendor')->with('success', 'Court created successfully.');
}

    public function showcourt()
    {

        $court = Court::get();
        return view('user.show-court', compact('court'));

    }

    //food court for admin
    public function admin_courts()
    {
        $courts = Court::get();
        $vendor = User::where('role', 1)->get(); 

        return view('admin.food-court', compact('courts','vendor'));
    }


    public function showdetails($id){
        
        $court = Court::find($id);
        return view('user.court-details', compact('court'));
    }


    public function vendor_courts()
    {
        $vendor_id = auth()->user()->id;
        $courts = Court::where('vendor_id', $vendor_id)->get();
        return view('vendor.view-food-court', compact('courts'));
    }


    public function edit_food_courts($id)
    {
        $court = Court::find($id);
        return view('vendor.food_court_edit', compact('court'));
    }



    public function update_food_courts(Request $request, $id)
    {
        $court = Court::find($id);
        $court->court_name = $request->input('court_name');
        $court->address = $request->input('address');
        $court->contact = $request->input('contact');
        $court->email = $request->input('email');
        $court->food_type = $request->input('food_type');
        $court->open_time = $request->input('open_time');
        $court->close_time = $request->input('close_time');
        $court->save();

        return redirect()->route('vendor.view-food-court')->with('success', 'Court updated successfully.');
    }
}
