<?php

namespace App\Http\Controllers;

use App\Sample;
use Session; 
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $samples = Sample::paginate(5); 
      return view('sample.index', compact('samples')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('sample.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $sample = Sample::create($request->all()); 
      if($sample->save()) {
        Session::flash('message', 'Created!'); 
        Session::flash('class', 'success'); 
      } else {
        Session::flash('message', 'Fail to create.'); 
        Session::flash('class', 'danger'); 
      }
      return redirect()->route('sample.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
      return view('sample.edit', compact('sample')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
      $sample->fill($request->all()); 
      
      if($sample->save()) {
        Session::flash('message', 'Updated!'); 
        Session::flash('class', 'success'); 
      } else {
        Session::flash('message', 'Fail to update.'); 
        Session::flash('class', 'danger'); 
      }

      return redirect()->route('sample.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
      if($sample->delete()) {
        Session::flash('message', 'Deleted!'); 
        Session::flash('class', 'success'); 
      } else {
        Session::flash('message', 'Fail to delete.'); 
        Session::flash('class', 'danger'); 
      }

      return redirect()->route('sample.index'); 
    }
}
