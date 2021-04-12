<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    protected $table = 'trees';

    protected $fillable = [
        'donation_id',
        'folio',
        'name',
        'location',
        'image',
        'needs_image'
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }

    public function getSignId()
    {
        return substr($this->folio, 1, 5) . " " . substr($this->name, 0, 24);
    }

    protected static function booted()
    {
        static::created(function ($tree) {
            // $tree->folio = sprintf('%03d', $tree->id % 1000) . date('d') . sprintf('%025s', strtoupper(substr(preg_replace("/[^a-zA-Z0-9]+/", "", $tree->name), 0, 25)));
            $tree->folio = 'T' . sprintf('%03d', $tree->id % 1000) . date('dmY');
            $tree->save();
        });
    }
}
