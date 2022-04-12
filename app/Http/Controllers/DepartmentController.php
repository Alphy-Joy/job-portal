<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('employer.department.index',[
            'departments' => $departments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'status' => '1'
        ]);


        return redirect('/employer/departments')->with('message', 'New department has been added');
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
        return view('employer.department.edit')
        ->with('department',Department::where('id',$id)->first());
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
        Department::where('id',$id)->update([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'status' => '1'
        ]);


        return redirect('/employer/departments')->with('message', 'Department has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::where('id',$id);
        $department->delete();
        return redirect('/employer/departments')->with('message', 'Department has been deleted');
    }

    public function status($id,$status)
    {  
        $status = ($status == 1) ? 0 : 1;
        Department::where('id',$id)->update([
            'status' => $status
        ]);
        return redirect('/employer/departments')->with('message', 'Department status has been updated');
    }
}
