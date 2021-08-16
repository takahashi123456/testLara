<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nankore extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');

}
}
