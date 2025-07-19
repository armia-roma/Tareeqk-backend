<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTowingRequest;
use App\Models\TowingRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\TowingRequestService;

class RequestController extends Controller
{
    protected $towingRequestService;
    public function __construct(TowingRequestService $towingRequestService)
    {
        $this->towingRequestService = $towingRequestService;
    }
    public function store(StoreTowingRequest $request): JsonResponse
    {
        $towingRequest = $this->towingRequestService->create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Towing request created successfully',
            'data' => $towingRequest
        ], 201);
    }

    public function cancel(Request $request, $id): JsonResponse
    {

        $cancelledRequest = $this->towingRequestService->cancel($id);

        return response()->json([
            'success' => true,
            'message' => 'Towing request cancelled successfully',
            'data' => $cancelledRequest
        ]);
    }
}
