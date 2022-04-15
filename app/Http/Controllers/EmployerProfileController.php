<?php

namespace App\Http\Controllers;

use App\Models\EmployerProfile;
use Illuminate\Http\Request;

class EmployerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EmployerProfile::create([
            'company_name' => $request->input('company_name'),
            'description' => $request->input('company_desc'),
            'website' => $request->input('company_name'),
            'contact_number' => $request->input('cp_number'),
            'user_designation' => $request->input('cp_designation'),
            'user_id' => auth()->user()->id,
            'status' => '1'
        ]);

        return redirect('/admin/states')->with('message', 'New state has been added');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = auth()->user()->id;
        $profile = EmployerProfile::where('user_id',$user_id)->first();
        //dd($profile);
        return view('employer.employer_profile.show',[
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = auth()->user()->id;
        return view('employer.employer_profile.edit')
        ->with('profile',EmployerProfile::where('user_id',$user_id)->first());
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
        $user_id = auth()->user()->id;
        EmployerProfile::where('user_id',$user_id)->update([
            'company_name' => $request->input('company_name'),
            'description' => $request->input('company_desc'),
            'website' => $request->input('website'),
            'contact_number' => $request->input('cp_number'),
            'user_designation' => $request->input('cp_designation'),
        ]);


        return redirect('/employer/profile/show')->with('message', 'Company profile has been updated');
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
    }
}
