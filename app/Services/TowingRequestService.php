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

    public function get(int $id): TowingRequest
    {
        return TowingRequest::findOrFail($id);
    }

    public function update(TowingRequest $towingRequest, array $data): TowingRequest
    {
        $towingRequest->update($data);
        return $towingRequest->fresh();
    }

    public function cancel(int $id): TowingRequest
    {
        $towingRequest = $this->get($id);

        return $this->update($towingRequest, [
            'status' => 'cancelled',
        ]);
    }
}
