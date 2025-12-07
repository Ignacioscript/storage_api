<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiskResource extends JsonResource
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
            'name' => $this->name,
            'driver' => $this->driver,
            'configuration' => $this->configuration,
            'isActive' => $this->is_active,
//            'filesCount' => $this->WhenLoaded( //this means when eager is loaded Disk::with('files')
//                'files', fn () => $this->files->count()
//            ),
            'filesCount' => $this->files_count ?? 0, // $a ?? $b ->  if $a is null $a = $b,
            'created_at' => $this->formatted_date_at,
            'updated_at' => $this->formatted_date_at,
        ];
    }
}

//TODO review Disk Resources

