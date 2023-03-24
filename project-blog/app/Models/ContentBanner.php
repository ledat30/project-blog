<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContentBanner extends Model
{
    protected $table = 'content_banners';

    protected $fillable = [
        'content',
        'name',
        'title',
        'status',
    ];
    public function detail($id){
        $contents = DB::table('content_banners')
            ->where('content_banners.id', $id)
            ->select([
                'content_banners.id',
                'content_banners.content',
            ])
            ->get();
        return $contents;
    }
}
