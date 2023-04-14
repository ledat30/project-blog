<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = [
        'image',
        'name',
        'user_id',
        'status',
    ];
    public function image()
    {
        return '/image/slide/'. $this->image;
    }

}
