<?php

namespace Ortoclear\Http\Controllers;

use Ortoclear\Trainer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$request->user()->authorizeRoles('root');
        //$trainer = new Trainer();
        $trainer = Trainer::all();
        //return $request;
        return view('trainer.index', compact('trainer'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max: 10',
            'avatar' => 'required|image',
            'slug' => 'required',
            'password' => 'required'
        ]);

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        //return $request;
        //
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->slug = $request->input('slug');
        $trainer->cargo = $request->input('cargo');
        $trainer->email = $request->input('email');
        $trainer->password = $request->input('password');
        $trainer->avatar = $name;
        $trainer->save();
        
        return redirect()->route('trainers.index');
        
        //return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        //$trainer = Trainer::find($id);
        //return $slug;
        return view('trainer.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        //return $trainer;
        return view('trainer.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }

        $trainer->save();
        return redirect()->route('trainers.show', [$trainer])->with('status', 'Entrenador modificado correctamente');
        //return $request;
        //return $trainer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        //return $file_path;
        $trainer->delete();
        return redirect()->route('trainers.index');
    }

}
