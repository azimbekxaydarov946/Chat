<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=
    [
        'orginal_name',
        'name',
        'size',
        'type',
        'create_by',
        'update_by',
        'deleted_by'
    ];

    public function message()
    {
        return $this->belongsTo(Message::class,'file_id','id');
    }
}
