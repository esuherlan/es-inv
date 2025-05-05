<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		$departments = Department::latest()->get();
		return view('departments.index',compact('departments'))
         		->with('i', (request()->input('page', 1) - 1) * 5);
	}

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create()
	{
		return view('departments.create');
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
			'name' => 'required',
	  	]);

	  	Department::create($request->all());

	  	return redirect()->route('departments.index')
			->with('success','New Department created successfully.');
	}

	/**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
	public function edit(Department $department)
	{ 
		return view('departments.edit', compact('department'));
	}

	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request, Department $department)
	{ 
		$request->validate([
			'name' => 'required',
		]);

		$department->update($request->all());

		return redirect()->route('departments.index')
							  ->with('success','Department updated successfully'); 
	}

	/**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */

	public function destroy(Department $department)
	{ 
		$department->delete();	
 
		return redirect()->route('departments.index')
							  ->with('success','Department deleted successfully');
 
	  }
}
