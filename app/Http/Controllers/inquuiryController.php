<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

class inquuiryController extends Controller
{
    public function index(Request $request)
    {
    	$inquires = Inquiry::paginate(10);
    	return view('admin.inqList', compact('inquires'))->with('active', 'inquiry');
    }
}
