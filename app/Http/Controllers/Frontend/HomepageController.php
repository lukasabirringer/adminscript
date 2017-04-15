<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function show()
    {
        return view('welcome');  
    }
}
