<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TowingRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'customer_id' => 'required|integer',
                'lat' => 'required|numeric|between:-90,90',
                'lang' => 'required|numeric|between:-180,180',
                'note' => 'nullable|string|max:1000',
            ]);

            $towingRequest = TowingRequest::create([
                'customer_id' => $validated['customer_id'],
                'lat' => $validated['lat'],
                'lang' => $validated['lang'],
                'note' => $validated['note'] ?? '',
                'status' => 'pending',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Towing request created successfully',
                'data' => $towingRequest
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create towing request',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
