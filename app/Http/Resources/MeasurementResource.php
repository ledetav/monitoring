<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeasurementResource extends JsonResource
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
            'station_id' => $this->station_id,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'reactive_powerA' => $this->reactive_powerA,
            'reactive_powerB' => $this->reactive_powerB,
            'reactive_powerC' => $this->reactive_powerC,
            'active_powerA' => $this->active_powerA,
            'active_powerB' => $this->active_powerB,
            'active_powerC' => $this->active_powerC,
            'voltageA' => $this->voltageA,
            'voltageB' => $this->voltageB,
            'voltageC' => $this->voltageC,
            'cosA' => $this->cosA,
            'cosB' => $this->cosB,
            'cosC' => $this->cosC,
            'reactive_powerA_off' => $this->reactive_powerA_off,
            'reactive_powerB_off' => $this->reactive_powerB_off,
            'reactive_powerC_off' => $this->reactive_powerC_off,
            'active_powerA_off' => $this->active_powerA_off,
            'active_powerB_off' => $this->active_powerB_off,
            'active_powerC_off' => $this->active_powerC_off,
            'voltageA_off' => $this->voltageA_off,
            'voltageB_off' => $this->voltageB_off,
            'voltageC_off' => $this->voltageC_off,
            'cosA_off' => $this->cosA_off,
            'cosB_off' => $this->cosB_off,
            'cosC_off' => $this->cosC_off,
            'enabled_blocks' => $this->enabled_blocks,
        ];
    }
}
