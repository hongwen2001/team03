<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students=Student::all();
        return View('students.index')->with(['students'=>$students,'whatdata'=>'全體學生資料']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $classes=LHUClass::all();
        return View('students.create')->with(['classes'=>$classes]);
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
        $student_id=$request->input('student_id');
        $seat_number=$request->input('seat_number');
        $name=$request->input('name');
        $gender=$request->input('gender');
        $cid=$request->input('cid');
        $graduation_date=$request->input('graduation_date');
        $start_date=$request->input('start_date');
        $seat=$request->input('seat');
        $country=$request->input('country');

        Student::create([
            'student_id' => $student_id,
                'seat_number' => $seat_number,
                'name' => $name,
                'gender' => $gender,
                'cid' => $cid,
                'graduation_date' => $graduation_date,
                'start_date' => $start_date,
                'seat' => $seat,
                'country' => $country

        ]);
        return redirect('students');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::findOrFail($id);
        return View('students.show')->with(['student'=>$student]);
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
        $student=Student::findOrFail($id);
        return View('students.edit')->with(["student"=>$student]);
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
        $student=Student::findOrFail($id);
        $student->student_id=$request->input('student_id');
        $student->seat_number=$request->input('seat_number');
        $student->name=$request->input('name');
        $student->gender=$request->input('gender');
        $student->cid=$request->input('cid');
        $student->graduation_date=$request->input('graduation_date');
        $student->start_date=$request->input('start_date');
        $student->seat=$request->input('seat');
        $student->country=$request->input('country');

        $student->save();
        return redirect('students');
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
        $student=Student::findOrFail($id);
        $student->delete();
        return redirect('students');
    }
}
