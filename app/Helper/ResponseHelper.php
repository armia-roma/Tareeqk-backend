<?php

namespace App\Helper;

class ResponseHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    /**
     * Function to return a standardized Success response.
     * @param array $data
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
    */
    public static function success($data = [], $message = 'Operation successful', $statusCode = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}
