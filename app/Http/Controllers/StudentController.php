<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        return view ('index', ['students' => StudentModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //whent the form is submited
        $student = new StudentModel();
        $student-> firstname = $request->input('firstname');
        $student-> lastname = $request->input('lastname');
        $student-> grade = $request->input('grade');
        $student-> registry = $request->input('registry');
        $student->save();

        return view ('index', ['students' => StudentModel::all()]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = StudentModel::find($id);

        return view('edit-student', [
            'id' => $student->id,            
            'firstname' => $student->firstname,
            'lastname' => $student->lastname,
            'grade' => $student->grade,
            'registry' => $student->registry
        ]);
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
        $student = StudentModel::find($id);
        $student-> firstname = $request->input('firstname');
        $student-> lastname = $request->input('lastname');
        $student-> grade = $request->input('grade');
        $student-> registry = $request->input('registry');
        $student-> update();
        return redirect()->to('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = StudentModel::find($id);
        $student->delete();
        return redirect()->to('/student');
    }
}
