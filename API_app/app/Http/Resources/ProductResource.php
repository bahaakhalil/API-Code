<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return [
        //     "name" => $this->name . " " . "2021",
        //     "nameCount" => str_word_count($this->name),
        //     "nameLetterCount" => strlen($this->name),
        //     "price" => "$" . $this->price,
        //     "username" => Auth::user()->name,
        //     "date" => $this->created_at->diffForHumans()
        // ];

        return [
            "id" => $this->id,
            "name" => $this->name,
            "title" => $this->title,
            "subtitle" => $this->subtitle,

            "description" => $this->description,
            "price" => "$" . $this->price,
            "date" => $this->created_at->diffForHumans(),
            "image" => asset($this->image),
        ];
    }
}
