<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court;

class CourtController extends Controller
{
    public function list()
    {
       
        $data = Court::get();        
        // return "court";
        return view('vendor.vendor', compact('data'));
    }

    public function create(){
        return view('register-court');
    }

    public function store(Request $request){


        // $path = $request->file('image')->store('public');
        // $fileName = $request->file('file')->store('public');
        // $fileName = $fileNameArray[1];
        // $menupath = $request->file('menu-img')->store('public');
        // $request->merge(['image' => $path]);

        if ($request->hasFile('image')) {
            $foodCourtImagePath = $request->file('image')->store('images', 'public');
        }

        // Handle the menu image
    
        

        court::create($request->all());
        return redirect()->route('vendor')->with('success', 'Court created successfully.');
    }

    public function showcourt (){
       
        $court = Court::get();        
        return view('user.show-court', compact('court'));
        
    }
}
