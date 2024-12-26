<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{


    public function list()
    {
        $data = User::where( 'role',2)->get();
        return view('admin.user-list', compact('data'));       
    }

    public function vendorlist()
    {
        $data = User::where( 'role',1)->get();
        return view('admin.vendor-list', compact('data'));       
    }



    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }



    public function userdelete($id){
        User::find($id)->delete();
        return redirect()->route('admin.user-list')->with('success','User deleted successfully');
        // return "delete";

    }

    public function vendordelete($id){
        User::find($id)->delete();
        return redirect()->route('admin.vendor-list')->with('success','Vendor deleted successfully');
        // return "delete";

    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'role' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
