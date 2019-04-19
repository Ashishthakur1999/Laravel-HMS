<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\details;
class project extends Controller
{
    public function data()
    {
    	$project=details::all();
    	return $project;

    	return view('details');
    }
}
