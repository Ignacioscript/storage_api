<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\DiskDriver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disk extends Model
{
    use HasFactory;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'driver',
        'configuration',
        'is_active'
    ];

    /** @var array<string,string> */
    protected $casts = [
        'configuration' => 'array',
        'is_active' => 'boolean'
    ];


    /** @return HasMany<File> */
    public function files(): HasMany
    {
        return $this->hasMany(
            related: File::class,
            foreignKey: 'disk_id',
            localKey: 'id'
        );
    }


    /** Scope: query to only include active disks */
    public function scopeActive(Builder $query)
    {
        return $query->where('is_active', true);
    }


    /** Scope: query to filter specific driver types */
    public function scopeDriver(Builder $query, DiskDriver $driver)
    {
        return $query->where('driver', $driver->value);
    }

    /** Accessor to get a human-readable date
     * @return string
     */
    public function getFormattedDateAtAttribute()
    {
        return $this->created_at?->format('F j, Y');
    }

}
