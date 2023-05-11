<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'image_01',
        'image_02',
        'image_03',
        'image_04',
        'dien_tich',
        'gia_phong',
        'city',
        'district',
        'ward',
        'title',
        'description',
    ];
}
