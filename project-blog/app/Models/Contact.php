<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends  Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'subject',
        'message',
    ];
    public function store(){
        DB::table('contacts')
            ->insert([
                'name'=> $this->name,
                'address'=>$this->address,
                'phone'=>$this->phone,
                'subject'=>$this->subject,
                'message'=>$this->message,
            ]);
    }
}
