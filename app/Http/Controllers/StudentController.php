<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View 
    {
        $student=Student::all();
        return view('students.index')->with('students',$student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       $input = $request->all();
       Student::create($input);
       return redirect('students')->with('flash-message','student Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $students = Student::Find($id);
        return view('students.show')->with('students',$students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):  View
    {
      $students = Student::Find($id);
      return view('students.edit')->with('students',$students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $students = Student::Find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message','student Update!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse 
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message','Student Deleted!!');

    }
}
