<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           
            $users = User::withCount('posts') 
                ->orderByDesc('posts_count') 
                ->take(5) 
                ->get();
            return view('admin.pages.dashboard', compact('users'));
        } catch (QueryException $e) {
            \Log::error('Database query error: ' . $e->getMessage());
            return back()->withErrors('Something went wrong while fetching the users.');
        } catch (\Exception $e) {
            \Log::error('General error: ' . $e->getMessage());
            return back()->withErrors('An unexpected error occurred. Please try again later.');
        }
    }

   
}
