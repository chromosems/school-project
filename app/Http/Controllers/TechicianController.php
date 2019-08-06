<?php

namespace App\Models\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technician;

class TechicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $techicians = Technician::latest()->paginate(6);
        return view('techicians.index', compact('techicians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('techicians.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'position' => 'required',
            'phone_number' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'job_type' => 'required',
            'date' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $form_data = array(
            'image' => $imageName,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'job_type' => $request->job_type,
            'date' => $request->date,
        );
        Technician::create($form_data);
        return redirect('technicians/create')->with('success', 'A new Technician  has been registered');


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
        $techicians = Technician::find($id);
        return view('techicians.show', compact('techicians'));
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
