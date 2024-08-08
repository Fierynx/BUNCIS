<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collaboration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'description',
    ];

    public function picCollaboration(): HasMany
    {
        return $this->hasMany(Pic_Collaboration::class, 'CollaborationId');
    }
}
