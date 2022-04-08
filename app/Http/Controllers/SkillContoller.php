<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::paginate(15);
        return view('skill.index',[
            'skills' => $skills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Skill::create([
            'name' => $request->input('skill_name'),
            'status' => '1'
        ]);


        return redirect('/admin/skills')->with('message', 'New skill has been added');
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
        return view('skill.edit')
        ->with('skill',Skill::where('id',$id)->first());
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
        Skill::where('id',$id)->update([
            'name' => $request->input('skill_name'),
            'status' => '1'
        ]);
        return redirect('/admin/skills')->with('message', 'Skill has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::where('id',$id);
        $skill->delete();
        return redirect('/admin/skills')->with('message', 'Skill has been deleted');
    }

    public function status($id,$status)
    {  
        $status = ($status == 1) ? 0 : 1;
        Skill::where('id',$id)->update([
            'status' => $status
        ]);
        return redirect('/admin/skills')->with('message', 'Skill status has been updated');
    }
}
