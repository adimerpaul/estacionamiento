<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable=[
        "fecha",
        "hora",
        "monto",
        "user_id",
        "auto_id"
    ];
}
