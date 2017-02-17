<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'name', 'size', 'real_name', 'extension','mime','url', 'user_id',
    ];
}
