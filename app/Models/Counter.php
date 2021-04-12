<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory, Notifiable;

        protected $fillable = [
        'act',
        'cont'
    ];
}
