<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regency extends Model
{
    use HasFactory;

    protected $table = 'regencies';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'province_id',
        'name',
        'alt_name',
        'latitude',
        'longitude',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function thematicData(): HasMany
    {
        return $this->hasMany(ThematicData::class, 'regency_id', 'id');
    }
}
