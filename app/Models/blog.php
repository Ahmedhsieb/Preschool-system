<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'title',
        'short_desc',
        'desc',
        'user_id',
    ];

    public function getImgAttribute($value)
    {
        return 'Images/Admin/blogs/'.$value;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
