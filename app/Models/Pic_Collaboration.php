<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pic_Collaboration extends Model
{
    use HasFactory;

    protected $fillable = [
        'PicId',
        'CollaborationId',
    ];
}
