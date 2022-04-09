<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::paginate(15);
        return view('admin.location.index',[
            'locations' => $locations
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
        $states = State::where('status', '=','1')->orderBy('name','asc')->get();
        return view('admin.location.create',[
            'states' =>$states
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->input('location_name'));
        Location::create([
            'name' => $request->input('location_name'),
            'state_id' => $request->input('state_id'),
            'status' => '1'
        ]);


        return redirect('/admin/locations')->with('message', 'New location has been added');
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
        $states = State::where('status', '=','1')->orderBy('name','asc')->get();
        $location = Location::where('id',$id)->first();
        return view('admin.location.edit',[
            'location' => $location,
            'states' => $states
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
        Location::where('id',$id)->update([
            'name' => $request->input('location_name'),
            'state_id' => $request->input('state_id'),
            'status' => '1'
        ]);


        return redirect('/admin/locations')->with('message', 'New location has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::where('id',$id);
        $location->delete();
        return redirect('/admin/locations')->with('message', 'Location has been deleted');
    }

    public function status($id,$status)
    {  
        $status = ($status == 1) ? 0 : 1;
        Location::where('id',$id)->update([
            'status' => $status
        ]);
        return redirect('/admin/locations')->with('message', 'Location status has been updated');
    }
}
