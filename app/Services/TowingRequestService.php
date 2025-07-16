<?php
namespace App\Services;
use App\Models\TowingRequest;

class TowingRequestService
{
    public function create(array $data): TowingRequest
    {
        return TowingRequest::create([
            'customer_id' => $data['customer_id'],
            'lat' => $data['lat'],
            'lang' => $data['lang'],
            'note' => $data['note'] ?? '',
            'status' => 'pending',
        ]);
    }
}
