<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    /**
     * @OA\Get(
     *     path="/resources",
     *     summary="Get a list of resources",
     *     tags={"Resource"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Resource::all());
    }
    /**
     * @OA\Post(
     *     path="/resources",
     *     summary="Post a new resource",
     *     tags={"Resource"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string", example="Example Name"),
     *             @OA\Property(property="email", type="string", format="email", example="example@example.com"),
     *             @OA\Property(property="password", type="string", example="password123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Resource created successfully"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6',
        ]);

        $resource = Resource::create($validatedData);
        return response()->json(Resource::all());
    }
    /**
     * @OA\Put(
     *     path="/resources/{id}",
     *     summary="Update an existing resource",
     *     tags={"Resource"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the resource to update",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *              @OA\Property(property="name", type="string", example="Updated name"),
     *              @OA\Property(property="email", type="string", format="email", example="updated@example.com" ),
     *              @OA\Property(property="password", type="string", example="newpassword123")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *     description="Resource updated successfully"
     *     ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad request"
     *      ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $resource = Resource::find($id);

        if(!$resource){
            return response()->json(['error' => 'Resource not found'], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' =>  'required|email|unique:users,email,'.$resource->id,
            'password'=> 'required|min:6',
        ]);

        $resource->update($validatedData);

        return response()->json($resource, 200);
    }
    /**
     * @OA\Delete(
     *     path="/resources/{id}",
     *     summary="Delete an existing resource",
     *     tags={"Resource"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the resource to delete",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Resource deleted successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Resource deleted successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Resource not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Resource not found")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     )
     * )
     */


    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $resources = Resource::find($id);

        if(!$resources){
            return response()->json(['error' => 'Resource not found'], 404);
        }

        $resources->delete();

        return response()->json(['message' => 'Resource deleted successfully'], 200);
    }
}
