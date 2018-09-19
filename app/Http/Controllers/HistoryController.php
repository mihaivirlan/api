<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('layouts.test');
    }

    public function report()
    {
        return Entry::all(); //view('layouts.test');
    }


}
