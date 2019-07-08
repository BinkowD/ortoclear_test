<?php

namespace Ortoclear\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function index(){
        return view('historys.index');
    }
}
