<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menambahkan data
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required | size:9'
        ]);
        //simpan data ke data base ada 3 cara
        //cara 1
        // $student= new Student;
        // $student->nama=$request->nama;
        // $student->nim=$request->nim;
        // $student->jurusan=$request->jurusan;
        //$student->email=$request->email;

        // $student->save();


        //cara 2 yg aman: 
        Student::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'email' => $request->email
        ]);

        //cara 3 satu baris :
        //Student::create([$request-> all()]);

        return redirect('/students')->with('status', 'Data Behasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //menangkap data 
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required | size:9'
        ]);
        //
        Student::where('id', $student->id)

            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'jurusan' => $request->jurusan,
                'email' => $request->email
            ]);
            return redirect('/students') ->with('status', 'Data Behasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Behasil dihapuskan');
    }
}
