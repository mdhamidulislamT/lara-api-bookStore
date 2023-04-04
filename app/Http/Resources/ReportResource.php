<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'id' => (string)$this->id,
            'description' => $this->description,
                'file_url' => $this->file_url,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            'notification' => [
                'title' => "Test Title",
                'body' => "some text here"
            ]
    ];
    }
}
