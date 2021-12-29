<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classes=LHUClass::all();
        return View('classes.index')->with(['classes'=>$classes,'whatdata'=>'所有班級']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $department=$request->input('department');
        $classname=$request->input('classname');
        $grede=$request->input('grede');
        $classroom=$request->input('classroom');
        $teacher=$request->input('teacher');
        LHUClass::create([
            'department'=>$department,
            'classname'=>$classname,
            'grede'=>$grede,
            'classroom'=>$classroom,
            'teacher'=>$teacher
        ]);
        return redirect('classes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $class=LHUClass::findOrFail($id);
        return View('classes.show')->with(['class'=>$class]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $class=LHUClass::findOrFail($id);
        return View('classes.edit')->with(['class'=>$class]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $class=LHUClass::findOrFail($id);
        $class->department=$request->input('department');
        $class->classname=$request->input('classname');
        $class->grede=$request->input('grede');
        $class->classroom=$request->input('classroom');
        $class->teacher=$request->input('teacher');
        $class->save();
        return redirect('classes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $class=LHUClass::findOrFail($id);
        $class->delete();
        return redirect('classes');
    }
}
