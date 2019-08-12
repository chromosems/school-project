<?php

namespace App\Http\Controllers;

use App\Models\Fire_Alarm;
use Illuminate\Http\Request;

class FireAlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fire_alarms = Fire_Alarm::paginate(6);
        return view('fire_alarms.index',compact('fire_alarms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fire_alarms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'company_name'=>'required',
            'location'=>'required',
            'fire_alarm_type' =>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'date'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' =>'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $form_data = array(

            'company_name' => $request->company_name,
            'location' => $request->location,
            'fire_alarm_type'=>$request->fire_alarm_type,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'date'=>$request->date,
            'image'=>$imageName,
            'bio'=>$request->bio,
        );
        Fire_Alarm::create($form_data);
        return redirect('fire_alarms/create')->with('success','A fire Alarm Company has been registered');

    }


    /**
     * Display the specified resourceN
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $fire_alarms = Fire_Alarm::find($id);
        return view('fire_alarms.show',compact('fire_alarms'));
    }

    /**
    image upload for the fire_alarms section
     **/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
