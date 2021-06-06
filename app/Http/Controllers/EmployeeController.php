<?php

namespace App\Http\Controllers;

use App\Employee ;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Employee::all();
        return view('employee.index', compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
           'empName' => 'required|min:3|max:20',
           'empSalary'=>'required',
           'image_data'=>'required|mimes:jpg,png'
       ]);
        $emp = new Employee();
        $emp->name = $request->input('empName');
        $emp->salary = $request->input('empSalary');

        $image = $request->file('image_data');
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/imgs/', $image_name);

        $emp->img =  $image_name ;
        $emp->save();
        return redirect('employee')->with("done", "Done Insert To DataBase");
    }

    public function show($id)
    {
        $emp = Employee::find($id);
        return view('employee.show', compact('emp'));
    }


    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('employee.edit', compact('emp'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'empName' => 'required|min:3|max:20',
            'empSalary'=>'required'
        ]);
        $emp =  Employee::find($id);
        $emp->name = $request->input('empName');
        $emp->salary = $request->input('empSalary');
        $emp->save();
        return redirect('employee')->with("done", "Done Updated ");
    }


    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect('employee')->with("done", "Done Deleted ");
    }
}
