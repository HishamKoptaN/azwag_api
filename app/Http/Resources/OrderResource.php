<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'requesterData' => $this->whenLoaded(
                'requesterData',
                function () {
                    return [
                        'first_name' => $this->requesterData->first_name,
                        'second_name' => $this->requesterData->second_name,
                        'nationality' => $this->requesterData->nationality,
                        'skinColor' => $this->requesterData->skinColor,
                        'employmentStatus' => $this->requesterData->employmentStatus,
                    ];
                },
            ),
            'requestedData' => $this->whenLoaded(
                'requestedData',
                function () {
                    return [
                        'maritalStatus' => $this->requestedData->maritalStatus,
                        'residenceArea' => $this->requestedData->residenceArea,
                        'educationalLevel' => $this->requestedData->educationalLevel,
                    ];
                },
            ),
        ];
    }
}
