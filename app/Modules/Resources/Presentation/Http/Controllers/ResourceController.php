<?php

declare(strict_types=1);

namespace App\Modules\Resources\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Resources\Application\CreateResource\CreateResourceAction;
use App\Modules\Resources\Application\GetBookingHistory\GetBookingHistoryAction;
use App\Modules\Resources\Application\GetResourceTypes\GetResourceTypeAction;
use App\Modules\Resources\Application\ResourcesList\GetResourcesListAction;
use App\Modules\Resources\Presentation\Http\Requests\CreateResourceRequest;
use App\Modules\Resources\Presentation\Http\Resources\ResourceResource;
use App\Modules\Resources\Presentation\Http\Resources\ResourceTypeResource;
use Illuminate\Http\JsonResponse;

class ResourceController extends Controller
{
    public function list(GetResourcesListAction $action): JsonResponse
    {
        $resources = $action->handle();
        return response()->json(ResourceResource::collection($resources));
    }

    public function getTypes(GetResourceTypeAction $action): JsonResponse
    {
        $types = $action->handle();
        return response()->json(ResourceTypeResource::collection($types));
    }

    public function create(CreateResourceAction $action, CreateResourceRequest $request): JsonResponse
    {
        return response()->json(
            $action->handle(
                $request->get('name'),
                $request->get('type'),
                $request->get('description')
            ),
            201,
            [],
            256
        );
    }

    public function getBookings(int $id, GetBookingHistoryAction $action): JsonResponse
    {
        return response()->json($action->handle($id), 200, [], 256);
    }
}
