<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Industry;

class dashboardController extends Controller
{
    public function index(Request $request){
    	$catCount = Category::all();
    	$indCount = Industry::all();
    	$catCount = $catCount->count();
    	$indCount = $indCount->count();
    	return view('admin.index', compact('catCount', 'indCount'))->with('active', 'dashboard');
    }
}
