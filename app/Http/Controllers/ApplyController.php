<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use Illuminate\Http\Request;
use App\Apply;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplyRequest $request)
    {
        $programme = $request->input('programme');
        $programme =implode(',',$programme);
        $input =$request->except('programme');
        $input['programme'] = $programme;
        $apply= new Apply(array(
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'phone_number'=>$request->get('phone_number'),
            'location'=>$request->get('location'),
            'college'=>$request->get('college'),
            'education'=>$request->get('education'),
            'graduation_year'=>$request->get('graduation_year'),
            'graduation_month'=>$request->get('graduation_month'),
            'interest'=>$request->get('interest'),
            'programme'=>$programme
        ));
        $apply->save();
        return redirect(route('apply.create'))->with(['message'=>'Application Was Recieved. A2B will review and get back to you as soon as possible']);

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
