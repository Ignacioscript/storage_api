<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
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
            'diskId' => $this->disk_id,
            'disk' => new DiskResource($this->whenLoaded('disk')),
            'name' => $this->name,
            'path' => $this->path,
            'mimeType' => $this->mime_type,
            'size' => $this->size,
            'humanSize' => $this->human_size,
            'hash' => $this->hash,
            'metadata' => $this->metadata,
            'createdAt' => $this->created_at?->toIso8601String(),
            'updatedAt' => $this->updated_at?->toIso8601String(),
            'deletedAt' => $this->deleted_at?->toIso8601String(),
        ];
    }
}
