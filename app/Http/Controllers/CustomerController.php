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
        return view('customers.index', compact('customers'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * this validation for the required fields
         */
        $request->validate([
            'date' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'location' => 'required',
            'phone_number' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'problem_description' => 'required',
            'service' => 'required',
        ]);

        /**
         * saving the image
         **/
        $image = $request->file('image');
        $imageName = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        /**
         * capturing  data  from the  forms.
         */
        $form_data = [
            'date' => $request->date,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'location' => $request->location,
            'phone_number' => $request->phone_number,
            'problem_description' => $request->problem_description,
            'service_id' => $request->service,
            'image' => $imageName,
        ];

        /***
         * storing form data into the database
         */
        Customer::create($form_data);

        return redirect('customer/create')->with('success', 'Welcome Aboard Customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
         * showing particular i dentity based on the a specific view  based on the ID
         */
        $customer = Customer::findOrfail($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        /**
//         * this calls for the page to be viewed as its edited*/
//        $customer = Customer::find($id);
//        return view('customers.edit', compact($customer));
//
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request $request
//     * @param  int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
////        //
////        $imageName = $request->hidden_image;
////        $image = $request->file('image');
////        if ($image != '') {
////            $request->validate([
////                'date' => 'required',
////                'first_name' => 'required',
////                'last_name' => 'required',
////                'location' => 'required',
////                'phone_number' => 'required',
////                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
////                'problem_description' => 'required',
////                'service' => 'required',
////            ]);
////            $imageName = rand() . '.' . $image->getClientOriginalExtension();
////            $image->move(public_path('images'), $imageName);
////        } else {
////            $request->validate([
////                'date' => 'required',
////                'first_name' => 'required',
////                'last_name' => 'required',
////                'location' => 'required',
////                'phone_number' => 'required',
////                'problem_description' => 'required',
////                'service' => 'required',
////            ]);
////        }
////        $form_data = array(
////            'date' => $request->date,
////            'first_name' => $request->first_name,
////            'last_name' => $request->last_name,
////            'location' => $request->location,
////            'phone_number' => $request->phone_number,
////            'problem_description' => $request->problem_description,
////            'service' => $request->service,
////            'image' => $imageName
////        );
////        Customer::whereId($id)->update($form_data);
////        return redirect('customers/show');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//        $customer = Customer::findOrfail($id);
//        if (is_null($customer)) {
//            return redirect('customers');
//        }
//        $customer->delete();x`
//        return redirect('customers');
//    }
}
