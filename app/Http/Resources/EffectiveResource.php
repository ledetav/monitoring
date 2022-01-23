<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EffectiveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'effective_power_on' => $this->effective_power_on,
            'effective_power_off' => $this->effective_power_off,
            'effective' => $this->effective,
            'measurement_id' => $this->measurement_id,
        ];
    }
}
