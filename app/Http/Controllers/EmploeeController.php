<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emploee;
use App\Http\Requests\EmploeeCreateRequest;
use App\Jobs\EmploeeFormFields;

class EmploeeController extends Controller
{

	protected $fields = [
	'name','phone','address','company','salary','bio'
	];
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emploees = Emploee::all();
        return view('emploee.index')->withEmploees($emploees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    	$data = $this->dispatch(new EmploeeFormFields());
        return  view('emploee.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmploeeCreateRequest $request)
    {
        //
        $emploee = new Emploee();
     	$emploee->fill($request->EmploeeFill());
        $emploee->save();
        return redirect('/emploee')->withSuccess("Emploee $emploee->name was created");
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
        $emploee = Emploee::findOrFail($id);
        return view('emploee.show')->withEmploee($emploee);
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
    	$emploee = Emploee::findOrFail($id);
      	$data = $this->dispatch(new EmploeeFormFields($id));
       	return view('emploee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmploeeCreateRequest $request, $id)
    {
        //
        $emploee = Emploee::findOrFail($id);
        $emploee->fill($request->EmploeeFill());
    	$emploee->save();
    	return redirect()->route('emploee.index')->withSuccess("Changes on emploee $emploee->name saved");
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
        $emploee = Emploee::findOrFail($id);
        $emploee->delete();
        return redirect('/emploee')->withSuccess("Emploee $emploee->name successfully deleted" );
    }
}
