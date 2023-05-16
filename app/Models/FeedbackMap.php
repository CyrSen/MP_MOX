<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackMap extends Model
{
    use HasFactory;

    protected $table = 'feedback_maps';

    protected $fillable = [
        'user_id',
        'x_coordinate',
        'y_coordinate',
        'noise_level',
        'temperature_level',
        'airquality_level',
        'higge_level',
        'commoncritique',
        'commentary',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

