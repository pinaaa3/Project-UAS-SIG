<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThematicData extends Model
{
    use HasFactory;

    protected $table = 'thematic_data';

    protected $fillable = [
        'regency_id',
        'population',
        'poverty_rate',
        'unemployment_rate',
        'parks',
        'schools'
    ];

    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class, 'regency_id', 'id');
    }
}
