<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainMessage extends Model
{
    protected $table = 'main_messages';
    protected $fillable = ['main_message'];

    public function ReplyMessage() {
        return $this->hasMany(ReplyMessage::class, 'main_id', 'id');
    }
}
