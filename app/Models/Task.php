<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['id', 'user_id', 'description', 'priority'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
