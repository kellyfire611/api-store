<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HrmTinhthanhResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type'          => 'hrm_tinhthanh',
            'id'            => (string)$this->id,
            'attributes'    => [
                'ma_tinhthanh' => $this->ma_tinhthanh,
                'ten_tinhthanh' => $this->ten_tinhthanh
            ]
        ];
    }
}
