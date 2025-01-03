<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use App\Models\Court;
use App\Models\User;
class RatingController extends Controller
{
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $rating = rating::create([
            'user_id' => $user_id,
            'court_id' => $request->court_id,
            'descriptions' => $request->descriptions,
            'rating' => $request->rating,
            'vendor_id' => $request->vendor_id,

        ]);
        
        return redirect()->route('dashboard')->with('success', 'Thank you for rating!');
        
        
    }


    public function show()
    {
        $user_id = Auth::user()->id;

        $court_data = Court::all();
        $user_data = user::all();

        $rating_count = Rating::where('user_id', $user_id)->count();
        
        $ratings = Rating::where('user_id', $user_id)->whereDate('created_at', now()->setTimeZone('Asia/Kolkata'))->get();

        return view('user.dashboard', compact('ratings', 'court_data', 'user_data' , 'rating_count'));
    }


    public function admin()
    
    {
        $user = User::Where ('role',2)->count();

        $vendor = User::where('role',1)->count();

        $court = Court::all()->count();

        $rating = Rating::all()->count();

        return view('admin.admin', compact('user', 'vendor', 'court', 'rating'));

        
    }

    public function admin_rating()
    {
        $ratings = Rating::all();
        $court_data = Court::all();
        $user_data = user::all();
        return view('admin.rating', compact('ratings', 'court_data', 'user_data'));
    }


    public function vendor_rating()
    {
        $user_id = Auth::user()->id;
        $ratings = Rating::where('vendor_id', $user_id)->orderBy('created_at','desc')->get();
        $court_data = Court::all();

        $user_data = user::all() ;


        return view('vendor.vendor-rating', compact('ratings', 'court_data','user_data'));
    }
    
    public function rating()
    {
        $user_id = Auth::user()->id;

        $court_data = Court::all();
        $user_data = user::all();

        
        $ratings = Rating::where('user_id', $user_id)->get();
        
        return view('user.rating', compact('ratings', 'court_data', 'user_data'));

    }

}