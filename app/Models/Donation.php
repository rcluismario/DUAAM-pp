<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $fillable = [
        'user_id',
        'total', // float
        'status',  // enum => pending | paid | cancelled
        'folio'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trees()
    {
        return $this->hasMany(Tree::class);
    }

    protected static function booted()
    {
        static::created(function ($donation) {
            $donation->folio = 'D' . sprintf('%03d', $donation->id % 1000) . date('dmY');
            $donation->save();
        });
    }

    public function totalString($value = null)
    {
        if (!isset($value)) {
            return '$ ' . number_format($this->total, 2, '.', ',');
        }
        return '$ ' . number_format($value, 2, '.', ',');
    }
}
