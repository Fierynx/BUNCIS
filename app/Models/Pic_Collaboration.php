<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pic_Collaboration extends Model
{
    use HasFactory;

    protected $fillable = [
        'PicId',
        'CollaborationId',
    ];

    public function pic(): BelongsTo
    {
        return $this->belongsTo(Pic::class, 'PicId');
    }

    public function collaboration(): BelongsTo
    {
        return $this->belongsTo(Collaboration::class, 'CollaborationId');
    }
}
