<?php

namespace App\Swagger\Schemas;

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
 *         property="description",
 *         type="string",
 *         description="Description of the resource",
 *         example="This is a sample resource description."
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
class ResourceSchema
{
    // This file is only used for defining the schema and does not contain any methods.
}
