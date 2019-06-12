<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(6);
        return view('customers.index',compact('customers'))
        /*This code makes pagination link*/
        ->with('i',(request()->input('page',1) -1) *6);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
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
            'date'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'location'=>'required',
            'phone_number'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'problem_description'=>'required',
            'service'=>'required',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $form_data = array(
            'date' =>$request->date,
            'first_name'=>$request->first_name,
            'last_name' => $request->last_name,
            'location'=> $request->location,
            'phone_number'=>$request->phone_number,
            'problem_description'=>$request->problem_description,
            'service'=>$request->service,
            'image'=> $imageName,
        );
          Customer::create($form_data);
          
        flash()->success('Success','Welcome Aboard customer successfully Registered');

        return redirect('customer/create');

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
        $customer = Customer::find($id);
        return view('customers.show',compact('customer'));
    }

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
