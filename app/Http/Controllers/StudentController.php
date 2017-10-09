<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; // just copied from 5.1

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$students = DB::select('select * from students');*/
        $students = Student::all();
        $db_input_fields = [
            'first_name',
            'middle_name',
            'last_name',
            'address',
            'birthday',
            'email_address',
        ];
        return view('StudentApp.student', ['students'=>$students,
                                            /*foreach ($db_input_fields as $DIF) {*/
                                                'DIF'=>$db_input_fields,
                                            /*}*/  
                                            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('StudentApp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request);*/ //shows the contents of the request

                                        /*METHOD #1*/
        $student = new Student;
        $student->first_name = ucwords($request->first_name);
        $student->middle_name = ucwords($request->middle_name);
        $student->last_name = ucwords($request->last_name);
        $student->address = ucwords($request->address);
        $student->birthday = $request->birthday;
        $student->email_address = $request->email_address;
        $student->save(); //saves the data above to the database

                                        /*METHOD #2*/
//        $inputs = $request->all();
//        return $inputs; // this line is for testing purposes online
//        $student = Student::create($inputs);

        return redirect()->route('students.index'); // redirect style #1
//        return redirect()->action('StudentController@index'); // another redirect style you can use
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
//    public function show(Student $student)
    public function show($id)
    {
        $student = Student::find($id);
//        return $id . " " . $student;
        return view('StudentApp.show', ['student'=>$student/*, 'id'=>$id*/]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);                      // method #1
//       $student = Student::where('id', $id)->first();     // method #2 of searching for the record
       // the above translates or is a shortcut of this line below which has the option of putting logical operators like "=", "<>", etc...
/*       $student = Student::where('id',"=", $id)->first();*/

//       return $student; // returns the values of the found item
        return view('StudentApp.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->first_name = ucwords($request->first_name);
        $student->middle_name = ucwords($request->middle_name);
        $student->last_name = ucwords($request->last_name);
        $student->address = ucwords($request->address);
        $student->birthday = $request->birthday;
        $student->email_address = $request->email_address;

        $student->save();


        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                // delete method #1
        $student = Student::find($id); 
        $student->delete();

                // method #2
//        Student::destroy($id); 


        return redirect()->route('students.index'); // return a redirect to the app index page
    }
}
