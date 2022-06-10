<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $employee = new Employee([
            'id'=> $request->get('id'),
            'firstName'=> $request->get('firstName'),
            'middleName'=> $request->get('middleName'),
            'lastName'=> $request->get('lastName'),
            'age'=> $request->get('age'),
            'gender'=> $request->get('gender'),
            'address'=> $request->get('address'),
            'email'=> $request->get('email'),
            'salary'=> $request->get('salary'),
            'startDate'=> $request->get('startDate'),
            'vacationDays'=> $request->get('vacationDays'),
            'workingHours'=> $request->get('workingHours'),
            'workingDays'=> $request->get('workingDays'),
            'grade'=> $request->get('grade'),
            'skill'=> $request->get('skill'),
            'show'=> $request->get('show'),
            'position'=> $request->get('position'),
            'username'=> $request->get('username'),
            'jobId'=> $request->get('jobId'),
            'jobName'=> $request->get('jobName'),
            'iban'=> $request->get('iban')
        ]);
        $employee->save();
        return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
