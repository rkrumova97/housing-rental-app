<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $data = (new Person())->get();
        return response()->json($data);
    }

    /**
     * send email
     *
     * @return JsonResponse
     */
    public function sendMail(Request $request): JsonResponse
    {
        $details = [
            'title' => 'Interview invite',
            'body' => 'Hi, ' . $request->input('name') .' You are invited to an interview on ' . $request->input('interviewDate')];

        \Mail::to($request->input('email'))->send(new MyTestMail($details));

        return response()->json('Email is Sent.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $person = new Person([
            'firstName' => $request->get('firstName'),
            'middleName' => $request->get('middleName'),
            'lastName' => $request->get('lastName'),
            'gender' => $request->get('gender'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'area' => $request->get('area'),
            'city' => $request->get('city'),
            'interviewDate' => $request->get('interviewDate')
        ]);
        $person->save();
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
        $data = (new Person)->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Person $Person
     * @return JsonResponse
     */
    public function update(Request $request, Person $Person): JsonResponse
    {
        $Person->update([
            'firstName' => $request->firstName,
            'id' => $request->id,
            'middleName' => $request->middleName,
            'lastName' => $request->lastName,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'area' => $request->area,
            'city' => $request->city,
            'interviewDate' => $request->interviewDate
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
        (new Person)->find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ]);
    }
}
