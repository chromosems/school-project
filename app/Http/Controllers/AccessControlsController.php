<?php

namespace App\Models\Http\Controllers;

use App\Models\Access_control;
use Illuminate\Http\Request;

class AccessControlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $access_controls = Access_control::paginate(6);
        return view('access_controls.index',compact('access_controls'))
        ->with('i',(request()->input('page',1) -1) *6);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('access_controls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'date'=> 'required',
            'company_name' => 'required',
            'location' => 'required',
            'access_control' => 'required',
            'phone_number' => 'required',
            'email' => ' required',
            'bio' => 'required',
        ]);
        $access_controls = new Access_control($request->all());
        $access_controls->save();
        return redirect('access_controls/create')->with('success', 'Welcome Aboard ,You Company has been Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $access_controls = Access_control::find($id);
        return view('access_controls.show',compact('access_controls'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
