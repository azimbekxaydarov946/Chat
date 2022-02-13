<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'message',
        'file',
        'chat_id',
        'auth_id',
        'create_by',
        'update_by',
        'deleted_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'auth_id','id');
    }
    public function chat()
    {
        return $this->belongsTo(Chat::class,'chat_id','id');
    }
}
