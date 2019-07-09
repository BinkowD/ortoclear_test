<?php

namespace Ortoclear\Http\Controllers;

use Ortoclear\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function index(){
        
        $history = History::all();
        
        return view('historys.index', compact('history'));
    }

    public function store(Request $request)
    {
        
        $history = new History();
        $history->name = $request->input('name');
        $history->process = $request->input('process');
        $history->doc = $request->input('doc');
        $history->product = $request->input('product');
        $history->description = $request->input('description');
        $history->view = $request->input('view');
        $history->save();
        
        return 'saved';
    }

}
