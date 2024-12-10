<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/resources",
     *     summary="Retrieve all resources",
     *     description="Retrieve a list of all resources",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Resource"))
     *     )
     * )
     */
    public function index()
    {
        return response()->json(Resource::all());
    }
    /**
     * @OA\Post(
     *     path="/api/resources",
     *     summary="Create a new resource",
     *     description="Create a new resource in the database",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Resource")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Resource created successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Resource")
     *     )
     * )
     */
    public function store(Request $request)
    {
        $resource = Resource::create($request->all());
        return response()->json($resource, 201);
    }
    /**
     * @OA\Get(
     *     path="/api/resources/{id}",
     *     summary="Retrieve a single resource",
     *     description="Retrieve a single resource by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the resource",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Resource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found"
     *     )
     * )
     */
    public function show($id)
    {
        $resource = Resource::find($id);

        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        return response()->json($resource);
    }
    /**
     * @OA\Put(
     *     path="/api/resources/{id}",
     *     summary="Update a resource",
     *     description="Update a resource by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the resource to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Resource")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Resource updated successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Resource")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $resource = Resource::find($id);

        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        $resource->update($request->all());
        return response()->json($resource);
    }
    /**
     * @OA\Delete(
     *     path="/api/resources/{id}",
     *     summary="Delete a resource",
     *     description="Delete a resource by ID",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the resource to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Resource deleted successfully"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $resource = Resource::find($id);

        if (!$resource) {
            return response()->json(['message' => 'Resource not found'], 404);
        }

        $resource->delete();
        return response()->json(['message' => 'Resource deleted successfully']);
    }
}
