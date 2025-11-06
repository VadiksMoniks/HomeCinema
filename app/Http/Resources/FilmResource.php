<?php

namespace App\Http\Resources;

use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'name_ua' => $this->name_ua,
            'name_en' => $this->name_en,
            'poster' => Storage::disk('public')->url("film/".str_replace(' ', '-', $this->name_en)."/{$this->poster}"),
            'description_ua' => $this->description_ua,
            'description_en' => $this->description_en,
            'trailer_url' => $this->trailer_url,
            'screenshots' => $this->screenshots ? FileService::getScreenshots($this->name_en) : [] ,
            'year' => $this->year,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'people' => $this->people,
            'tags' => $this->tags,
        ];
    }
}
