<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'auth_id',
        'user_id',
        'date',
        'chat_id',
        'create_by',
        'update_by',
        'deleted_by'
    ];
  public function message()
  {
      return $this->hasMany(Message::class,'chat_id','id');
  }
  public function user()
  {
      return $this->belongsTo(User::class,'user_id','id');
  }
}
