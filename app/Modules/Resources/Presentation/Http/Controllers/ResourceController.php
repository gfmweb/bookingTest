<?php

declare(strict_types=1);

namespace App\Modules\Resources\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Resources\Application\CreateResource\CreateResourceAction;
use App\Modules\Resources\Application\GetBookingHistory\GetBookingHistoryAction;
use App\Modules\Resources\Application\GetResourceTypes\GetResourceTypeAction;
use App\Modules\Resources\Application\ResourcesList\GetResourcesListAction;
use App\Modules\Resources\Presentation\Http\Requests\CreateResourceRequest;
use Illuminate\Http\JsonResponse;

class ResourceController extends Controller
{
    public function list(GetResourcesListAction $action): JsonResponse
    {
        return response()->json($action->handle(), 200, [], 256);
    }

    public function getTypes(GetResourceTypeAction $action): JsonResponse
    {
        return response()->json($action->handle(), 200, [], 256);
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
