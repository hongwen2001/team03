<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        $students=LHUClass::with('students')->find($id);
        return View('classes.show')->with(['class'=>$class,'students'=>$students]);
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
    public function inquire_input(){
        return View('classes.inquire_input');
    }
    public function inquire_output(Request $request){

    }

    public function api_classes(){
        return LHUClass::all();
    }
    public function api_update(Request $request){
        $id=DB::table('classes')->where([
            ['department','=',$request->input('department')],
            ['classname','=',$request->input('classname')],
            ['grede','=',$request->input('grede')]])->value('id');

        if ($id==null){
            return response()->json(['status'=>0,]);
        }
        $original=$class=LHUClass::find($id);
        $class->department=$request->input('department');
        $class->classname=$request->input('classname');
        $class->grede=$request->input('grede');
        $class->classroom=$request->input('classroom');
        $class->teacher=$request->input('teacher');
        $class->save();
        return response()->json(['status'=>1,'message'=>$original]);
    }
    public function api_delete(Request $request){
        if (count(array($request))==1){
            if (in_array($request->keys()['0'],Schema::getColumnListing('classes'))) {
                $field_name=($request->keys())['0'];
                $classes=DB::table('classes')->where($field_name,$request->$field_name)->get();
                DB::table('classes')->where($field_name,$request->$field_name)->delete();
            }else{
                return '沒有這個項目';
            }
        }
        else {
            return '條件數量過多';
        }
        return (count($classes)<1)?'沒資料':$classes;
    }

}
