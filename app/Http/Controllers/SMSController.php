<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SMSController extends Controller
{
    public function index(Request $request)
    {
        Log::info($request);
        return 'hi';
    }
}