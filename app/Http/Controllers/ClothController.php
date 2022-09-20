<?php

namespace App\Http\Controllers;

use App\Option;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    
    public function home(Option $option)
    {
    return view('clothes/home')->with(['options' => $option->get()]);
    }
    
    public function result(Option $option)
    {
    return view('clothes/result')->with(['options' => $option->get()]);
    }
}
?>