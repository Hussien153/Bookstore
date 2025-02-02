<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BooksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
{
    return [
        'id' => (string) $this->id,
        'type' => 'Books',
        'attributes' => [
            'name' => $this->name,
            'authors' => $this->authors,
            'description' => $this->description,
            'publication_year' => $this->publication_year,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ]
    ];
}
}
