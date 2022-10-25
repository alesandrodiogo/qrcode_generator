<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    public function index()
    {
        $response = "https://github.com/alesandrodiogo";

        return view('welcome', ['response' => $response]);
    }
}
