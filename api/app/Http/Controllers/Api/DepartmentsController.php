<?php

namespace App\Http\Controllers\Api;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
	public function index()
	{
		$departments = Department::latest()->get();
		return response([
			'success' => true,
			'message' => 'List Departments',
			'data' => $departments
		], 200);
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
				'name' => 'required',
			],
			[
				'name.required' => 'Please insert department name!',
			]
		);

		if($validator->fails()) {
			return response()->json([
				'success' => false,
				'message' => 'Silahkan Isi Bidang Yang Kosong',
				'data'    => $validator->errors()
			], 400);
		} else {
			$department = Department::create([
				'name' => $request->input('name')
			]);

			if ($department) {
				return response()->json([
					'success' => true,
					'message' => 'New department was saved successfully!',
				], 200);
			} else {
				return response()->json([
					'success' => false,
					'message' => 'New department failed!',
				], 400);
			}
		}
	}

	public function show($id)
	{
		$department = Department::whereId($id)->first();

		if ($department) {
			return response()->json([
				'success' => true,
				'message' => 'Detail Department!',
				'data'    => $department
			], 200);
		} else {
			return response()->json([
				'success' => false,
				'message' => 'Department not found!',
				'data'    => ''
			], 404);
		}
	}

	public function update(Request $request)
	{
		//validate data
		$validator = Validator::make($request->all(), [
				'name' => 'required',
			],
			[
				'name.required' => 'Please input the department name!',
			]
		);

		if ($validator->fails()) {
			return response()->json([
				'success' => false,
				'message' => 'Please input the blank field!',
				'data'    => $validator->errors()
			], 400);
		} else {
			$post = Department::whereId($request->input('id'))->update([
				'name' => $request->input('name'),
			]);

			if ($post) {
				return response()->json([
					'success' => true,
					'message' => 'Department was updated successfully!',
				], 200);
			} else {
				return response()->json([
					'success' => false,
					'message' => 'Department was failed updated!',
				], 500);
			}
		}
	}

	public function destroy($id)
	{
		$department = Department::findOrFail($id);
		$department->delete();

		if ($department) {
			return response()->json([
				'success' => true,
				'message' => 'Department was deleted successfully!',
			], 200);
		} else {
			return response()->json([
				'success' => false,
				'message' => 'Department was failed deleted!',
			], 500);
		}
	}
}