<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FileCollection extends ResourceCollection
{
    public $collects = FileResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $size = $this->collection->sum('size');
        return [
            'data' => $this->collection,
            'meta' => [
                'total' => $this->collection->count(),
                'totalSize' => $this->collection->sum('size'),
                'totalSizeHuman' => $this->formatBytes($size),
            ],
        ];
    }

    private function formatBytes(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}
