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
        'chat_id',
        'message',
        'user_id',
        'file_id',
        'view',
        'date',
        'create_by',
        'update_by',
        'deleted_by'
    ];

    public function file()
    {
        return $this->belongsTo(File::class,'file_id','id');
    }
    public function chat()
    {
        return $this->belongsTo(Chat::class,'chat_id','id');
    }
}
