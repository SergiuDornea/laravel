<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


namespace App;
use Illuminate\Database\Eloquent\Model;
class Task extends Model
{
    public $fillable = ['id','name', 'description'];
}

