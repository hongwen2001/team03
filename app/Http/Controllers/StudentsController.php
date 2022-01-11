<?php

namespace App\Http\Controllers;

use App\Models\LHUClass;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        $cid=(int)($request->input('cid'));
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
        $students=Student::findOrFail($id);
        return View('students.show')->with(['students'=>[$students]]);
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
        $classes=LHUClass::all();
        $student=Student::findOrFail($id);
        return View('students.edit')->with(["student"=>$student,'classes'=>$classes]);
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
    public function grade_query(Request $request){
        $students=LHUClass::grade_students($request->grade);
        return View('students.grade_query')->with(['students'=>$students,'grade'=>$request->grade]);
    }
    public function api_students(){
        return Student::all();
    }
    public function api_update(Request $request){
        $id=DB::table('students')->where('student_id',$request->input('student_id'))->value('id');

        if ($id==null){
            return response()->json(['status'=>0]);
        }
        $original_student=$student=Student::find($id);

        $student->student_id=$request->input('student_id');

        $student->seat_number=$request->input('seat_number');

        $student->name=$request->input('name');

        $student->gender=$request->input('gender');
        $student->cid=$request->input('cid');
        $student->graduation_date=$request->input('graduation_date');
        $student->start_date=$request->input('start_date');
        $student->seat=$request->input('seat');
        $student->country=$request->input('country');
        if ($student->save()) {
            return response()->json(['status' => 1, 'message' => $original_student]);
        }else{
            return response()->json(['status'=>0]);
        }
    }
    public function api_delete(Request $request){
        if (count(array($request))==1){
            if (in_array($request->keys()['0'],Schema::getColumnListing('students'))) {
                $field_name=($request->keys())['0'];
                $students=DB::table('students')->where($field_name,$request->$field_name)->get();
                DB::table('students')->where($field_name,$request->$field_name)->delete();
            }else{
                return '沒有這個項目';
            }
        }
        else {
            return '條件數量過多';
        }
        return $students;
    }
}
