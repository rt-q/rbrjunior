<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'id' => $this->id,
            'content' => $this->content,
            'author' => $this->author,
            'post_id' => $this->post_id,
            'createdAt' => $this->created_at->format('d/m/Y'),
            'updatedAt' => $this->updated_at->format('d/m/Y')
        ];
    }
}
