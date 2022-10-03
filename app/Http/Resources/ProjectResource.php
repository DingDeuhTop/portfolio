<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'name' => $this->name,
            'image' => asset('/storage/' . $this->image),
            'skill' => new SkillResource($this->whenLoaded('skill')),
            // 'skill_id' => $this->skill_id,
            'project_url' => $this->project_url,
            // 'skill_name' => $this->skill->name
        ];
    }
}
