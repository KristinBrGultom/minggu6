<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\kelas;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::with('kelas')->get();
        return view('students.index', ['student'=>$student]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('students.create',['kelas'=>$kelas]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->department = $request->department;
        $student->phone_number = $request->phone_number;
        
        $kelas = new Kelas;
        $kelas->id = $request->Kelas;
       
        $student->kelas()->associate($kelas);
        $student->save();
 
        // if true, redirect to index
        return redirect()->route('students.index')
        ->with('success', 'Add data success!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view ('students.show ', ['student'=>$students]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $kelas = Kelas::all();
        return view('students.edit',['student'=>$student, 
        'kelas'=>$kelas]);
    }

    public function detail($id)
    {
        $student = Student::find($id);
        return view('students.detail',['student'=>$student]);
        
    }
}