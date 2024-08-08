<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'gender',
        'position',
        'CorporateId',
    ];

    public function corporate(): BelongsTo
    {
        return $this->belongsTo(Corporate::class, 'CorporateId');
    }

    public function picCollaboration(): HasMany
    {
        return $this->hasMany(Pic_Collaboration::class, 'PicId');
    }
}
