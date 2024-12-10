<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Schema(
 *     schema="Resource",
 *     type="object",
 *     title="Resource",
 *     description="Resource model schema",
 *     required={"name", "type"},
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID of the resource",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Name of the resource",
 *         example="Sample Resource"
 *     ),
 *     @OA\Property(
 *         property="type",
 *         type="string",
 *         description="Type of the resource",
 *         example="example_type"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Creation timestamp",
 *         example="2024-12-10T10:00:00Z"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Last update timestamp",
 *         example="2024-12-10T11:00:00Z"
 *     )
 * )
 */

/**
 * @OA\Info(
 *     title="My API Documentation",
 *     version="1.0.0",
 *     description="This is the API documentation for my Laravel application.",
 *     @OA\Contact(
 *         email="your-email@example.com"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000/api",
 *     description="Development server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
