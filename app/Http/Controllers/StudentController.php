<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Student=Student::latest()->paginate(5);
        return view('student',compact('Student'));
    }
    public function adding()
    {
        return view('studentadd');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            [
                'fname' => $request->fname,
                'lname'=>$request->lname,
                'reg_no'=>$request->reg_no,
                'gender'=>$request->gender,
                'amount'=>$request->amount,
                'age'=>$request->age,
            ],
            [
                'fname' => ['required','max:40'],
                'lname' => ['required','max:40'],
                'reg_no' => ['required'],
                'gender' => ['required'],
                'amount' => ['required'],
                'age' => ['required']

            ],[
                'fname.required' => 'Please enter your fname',
                'lname.required' => 'Please enter your lname',
                'reg_no.required' => 'Please enter your reg_no',
                'gender.required' => 'Please enter your gender',
                'amount.required' => 'Please enter your amount',
                'age.required' => 'Please enter your age',
                'name.max' => 'Name should not exceed 40 characters',
            ]);
            if($validator->fails()){
                return redirect()->route('studentstore')
                                 ->withInputs($request->all())
                                 ->withErrors($validator);
            }
            else{
        Student::create($request->all());
         return redirect()->route('index');

            }
    //     $request->validate([
    //         'fname'=>'required',
    //         'lname'=>'required',
    //         'reg_no'=>'required',
    //         'gender'=>'required',
    //         'amount'=>'required',
    //         'age'=>'required',
    //     ],
    // [
    //     'fname.require'=>'Enter Text There'
    // ]
    // );
    //     Student::create($request->all());

    //      return redirect()->route('index')->with('','Student Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $reques =$request->id;
    $stu_det = Student::findOrFail($reques);

        return view('studentedit', compact('stu_det'));
    //   $stu_det = DB::select('SELECT * FROM `students` WHERE `id`= ?',[$reques]);
    //   return view('studentedit',compact('stu_det'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      DB::update('UPDATE `students` SET`fname`=?,`lname`=?,`reg_no`=?,`gender`=?,`amount`=?,`age`=? WHERE  `id`=?',[$request->input['fname'],$request->input['lname'],$request->input['reg_no'],$request->input['gender'],$request->input['amount'],$request->input['age'],$student]);
      return "<script> alert()</script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
