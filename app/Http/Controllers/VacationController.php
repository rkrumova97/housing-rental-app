<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VacationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $data = (new Vacation())->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $Vacation = new Vacation([
            'id' => $request->get('id'),
            'startingDate' => $request->get('startingDate'),
            'departments' => $request->get('departments'),
            'grades' => $request->get('grades'),
            'positions' => $request->get('positions'),
            'skills' => $request->get('skills')
        ]);
        $Vacation->save();
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
        $data = (new Vacation)->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vacation $Vacation
     * @return JsonResponse
     */
    public function update(Request $request, Vacation $Vacation): JsonResponse
    {
        $Vacation->update([
            'id' => $request->get('id'),
            'startingDate' => $request->get('startingDate'),
            'departments' => $request->get('departments'),
            'grades' => $request->get('grades'),
            'positions' => $request->get('positions'),
            'skills' => $request->get('skills')
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
        (new Vacation)->find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ]);
    }
}
