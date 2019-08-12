<?php

namespace App\Http\Controllers;

use App\Models\Cctv_camera;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class CctvCameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cctv_cameras = Cctv_camera::paginate(6);
        return view('cctv_cameras.index', compact('cctv_cameras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cctv_cameras.create');
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
            'date' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'cameras' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'bio' => 'required'
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $form_data = array(
            'date' => $request->date,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'cameras' => $request->cameras,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'image' => $imageName,
            'bio' => $request->bio
        );
        Cctv_camera::create($form_data);
        return redirect('cctv_cameras/create')->with('success', 'Welcome Aboard ');
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
        $cctv_cameras = Cctv_camera::find($id);
        return view('cctv_cameras.show', compact('cctv_cameras'));
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
