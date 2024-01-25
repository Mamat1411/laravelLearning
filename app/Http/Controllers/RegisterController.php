<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.index', [
            'title' => "Registration Page"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:300',
            'username' => 'required|unique:users|max:300',
            'email' => 'required|email:dns|unique:users|max:300',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => Crypt::encrypt($request['name']),
            'username' => bcrypt($request['username']),
            'email' => Crypt::encrypt($request['email']),
            'password' => bcrypt($request['password'])
        ]);

        return redirect('/login') -> with('status', 'You\'ve Registered. Please Sign In Now');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
