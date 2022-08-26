<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\Story;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\StoryResource;
class BookResource extends JsonResource
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
            'id'=> $this->id,
            'title'=> $this->title,
            'user_id'=> $this ->user_id,
            'body'=>$this->body,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user' => $this->user,
            'stories'=> StoryResource::collection(
                Story::where('book_id', '=' , $this->id)
                ->orderBy('id')
                ->get()
                ),
        ];

    }
}
