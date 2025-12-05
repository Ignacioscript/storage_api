<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory;
    use SoftDeletes;


    /** @var array<int, string> */
    protected $fillable = [
        'disk_id',
        'name',
        'path',
        'mime_type',
        'size',
        'hash',
        'metadata',
    ];


    /** @var array<string, string> */
    protected $casts = [
        'size' => 'integer',
        'metadata' => 'array',
    ];


    /** @return BelongsTo<Disk> */
    public function disk(): BelongsTo
    {
        return $this->belongsTo(
            related: Disk::class,
            foreignKey: 'disk_id',
            ownerKey: 'id'
        );
    }


    /** @return string */
    public function getHumanSizeAttribute(): string
    {
        $bytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' '. $units[$i];
    }


    /** @return string */
    public function getFormattedCreatedAtAttribute(): string
    {
        //get current created_at value-> transform into human readable-> output (string)
        $dateCreated = $this->created_at;
        return $dateCreated->format('F j, Y');

    }


    /** Scope: query to only include files of specific MIME type */
    public function scopeOfType(Builder $query, string $mime_type)
    {
        return $query->where('mime_type', 'like', "$mime_type%");
    }


    /** Scope query to only include images */
    public function scopeImages(Builder $query)
    {
        return $query->where('mime_type', 'like', 'image%');
    }

    public function scopeVideos(Builder $query)
    {
        return $query->where('mime_type', 'like', 'video%');
    }


    /** Scope: query to filter files by specific disk */
    public function scopeOnDisk(Builder $query, int $diskId)
    {
        return $query->where('disk_id', $diskId);
    }


    /** Scope: query to filter files larger than 5MB */

    public function scopeLarge(Builder $query, int $megabytes)
    {
        $bytes = $megabytes * (1024 * 1024);
        return $query->where('size', '>', $bytes );
    }


}
