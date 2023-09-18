<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReplyMessage extends Model
{
    protected $table = 'reply_messages';
    protected $fillable = ['reply_message','main_id'];

    public function MainMessage() {
        return $this->belongsTo(MainMessage::class, 'main_id', 'id');
    }
}
