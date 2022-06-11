<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $data = (new Position())->get();
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
        $Position = new Position([
            'name' => $request->get('name'),
            'jobId' => $request->get('jobId'),
            'department' => $request->get('department'),
        ]);
        $Position->save();
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
        $data = (new Position)->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Position $Position
     * @return JsonResponse
     */
    public function update(Request $request, Position $Position): JsonResponse
    {
        $Position->update([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            'jobId' => $request->get('jobId'),
            'department' => $request->get('department'),
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
        (new Position)->find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ]);
    }}
