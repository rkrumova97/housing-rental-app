<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $data = (new Project())->get();
        $plucked = $data->pluck('name');

        return response()->json($plucked);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $Project = new Project([
            'startingDate' => $request->get('startingDate'),
            'departments' => $request->get('departments'),
            'positions' => $request->get('positions'),
            'name' => $request->get('name'),
            'skills' => $request->get('skills')
        ]);
        $Project->save();
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
        $data = (new Project)->find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $Project
     * @return JsonResponse
     */
    public function update(Request $request, Project $Project): JsonResponse
    {
        $Project->update([
            'id' => $request->get('id'),
            'startingDate' => $request->get('startingDate'),
            'departments' => $request->get('departments'),
            'name' => $request->get('name'),
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
        (new Project)->find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ]);
    }
}
