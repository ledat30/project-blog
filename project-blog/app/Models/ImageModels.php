<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModels extends Model
{
    use HasFactory;
    protected $table = 'images';

    protected $fillable = [
        'image',
        'name',
        'user_id',
        'categoryimg_id',
        'status',
    ];
    public function image()
    {
        return '/image/Hinh anh/'. $this->image;
    }
}
