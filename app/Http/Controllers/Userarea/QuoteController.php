<?php

namespace App\Http\Controllers\Userarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userarea/quote');
    }
}
