<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $data = (new Employee)->get();
        return response()->json($data, 200);
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
            'id' => $request->get('id'),
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'salary' => $request->get('salary'),
            'startDate' => $request->get('startDate'),
            'vacationDays' => $request->get('vacationDays'),
            'workingHours' => $request->get('workingHours'),
            'workingDays' => $request->get('workingDays'),
            'grade' => $request->get('grade'),
            'skill' => $request->get('skill'),
            'show' => $request->get('show'),
            'position' => $request->get('position'),
            'username' => $request->get('username'),
            'jobId' => $request->get('jobId'),
            'jobName' => $request->get('jobName'),
            'iban' => $request->get('iban')
        ]);
        $employee->save();
        return response()->json('Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function get(int $id): JsonResponse
    {
        $data = (new Employee)->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $employee
     * @return JsonResponse
     */
    public function update(Request $request, Employee $employee): JsonResponse
    {
        $employee->update([
            'firstName' => $request->firstName,
            'id' => $request->id,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'salary' => $request->salary,
            'startDate' => $request->startDate,
            'vacationDays' => $request->vacationDays,
            'workingHours' => $request->workingHours,
            'workingDays' => $request->workingDays,
            'grade' => $request->grade,
            'skill' => $request->skill,
            'show' => $request->show,
            'position' => $request->position,
            'username' => $request->username,
            'jobId' => $request->jobId,
            'jobName' => $request->jobName,
            'iban' => $request->iban
        ]);

        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public
    function destroy(int $id): JsonResponse
    {
        (new Employee)->find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ]);
    }
}
