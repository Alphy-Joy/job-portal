<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;


class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::paginate(15);
        return view('state.index',[
            'states' =>$states
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required'
        // ]);
        State::create([
            'name' => $request->input('state_name'),
            'status' => '1'
        ]);


        return redirect('/admin/states')->with('message', 'New state has been added');
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
        return view('state.edit')
        ->with('state',State::where('id',$id)->first());
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
        State::where('id',$id)->update([
            'name' => $request->input('state_name'),
            'status' => '1'
        ]);


        return redirect('/admin/states')->with('message', 'State has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::where('id',$id);
        $state->delete();
        return redirect('/admin/states')->with('message', 'State has been deleted');
    }

    public function updateStatus($id,$status)
    {
        dd($id);
        State::where('id',$id)->update([
            'status' => '1'
        ]);
        return redirect('/admin/states')->with('message', 'State has been deleted');
    }
}
