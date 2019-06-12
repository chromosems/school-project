<?php

namespace App\Http\Controllers;

use App\Broker;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;

class BrokersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brokers = Broker::paginate(6);
        return view('brokers.index', compact('brokers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brokers.create');
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
            'brokers_name',
            'contact',
            'location',
            'address',
            'district',
            'price',
            'description',
            'date'
        ]);
        $brokers = new Broker($request->all());
        $brokers->save();
        return redirect('brokers/create')->with('success', 'Welcome Aboard');
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
        $brokers = Broker::find($id);
        return view('brokers.show', compact('brokers'));
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
    public function update(Request $request)
    {
        //
        $request->validate([
            'brokers_name',
            'contact',
            'location',
            'address',
            'district',
            'price',
            'description',
            'date'
        ]);
        $brokers = Broker:: find($request->id);
        $brokers->brokers_name = $request->get('brokers_name');
        $brokers->contact = $request->get('contact');
        $brokers->location = $request->get('location');
        $brokers->address = $request->get('address');
        $brokers->district = $request->get('district');
        $brokers->price = $request->get('price');
        $brokers->description = $request->get('description');
        $brokers->date = $request->get('date');
        $brokers->save();
        return redirect('brokers/show' . $brokers->id)->with('success','Successfully updated the user');


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
