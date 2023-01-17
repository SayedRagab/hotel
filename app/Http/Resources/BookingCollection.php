<?php

namespace App\Http\Resources;

use App\Http\Data\Dumy;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $dumy = new Dumy();
        $hotel = collect($dumy->getHotels())->firstWhere('id',$this->hotel_id);
        return [
            'id'=>$this->id,
            'check_in'=>$this->check_in,
            'check_out'=>$this->check_out,
            'guest'=>$this->guest,
            'total'=>$this->total,
            'hotel'=>$hotel,
        ];
    }
}
