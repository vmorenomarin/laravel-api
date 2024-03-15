<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return array(
            'id' => $this->id,
            'post_name'=> $this->title ,
            'slug' => $this->slug,
            'content' => $this->content,
            'autor' => [
                'name'=>$this->user->name,
                'email'=>$this->user->email],
            'created_at' => $this->created_at_formated
        );
    }
}