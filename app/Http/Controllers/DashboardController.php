<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Event;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalfaliaty = Trip::count();
        $unbook =   Book::where('isbook',0)->count();
        $isbook =   Book::where('isbook',1)->count();
        $book =   Book::count();
        $blog =   Blog::count();
        $catogery =   Event::count();
        $last5Customers = User::orderBy('created_at', 'desc')->take(5)->get();



        return view('dashboard',
    [
        'totalUsers'=>$totalUsers,
        'totalfaliaty'=>$totalfaliaty,
        'unbook'=>$unbook,
        'isbook'=>$isbook,
        'book'=>$book,
        'blog'=>$blog,
        'catogery'=>$catogery,
        'last5Customers'=>$last5Customers,
    ]
     );
    }
}
