<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    // }

 

   
        public function showDashboard()
        { if (Auth::check()) {
            $user = Auth::user();
        
            $user = Auth::user();
    
            // Check if the logged-in user is the admin
            if ($user->email === 'admin@admin.com') {
                return view('admin'); // Redirect to the admin.blade.php view
            }
    
            // Default view for non-admin users
            return view('home'); 
        }
        }
        
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
