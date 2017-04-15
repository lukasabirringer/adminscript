<?php

namespace App\Http\Controllers\frontend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class PagesController extends Controller
{
    public function read($id)
		 		{
		 				$page = Page::findOrFail($id);

		 				return view('frontend.pages.read', compact('page'));  
	    	}
}
